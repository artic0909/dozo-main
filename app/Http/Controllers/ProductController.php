<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function getSubCategories($mainCategoryId)
    {
        // Fetch subcategories that belong to the given main category
        $subcategories = SubCategory::where('main_category_id', $mainCategoryId)->get();

        // Return the subcategories as JSON
        return response()->json($subcategories);
    }

    public function getProduct()
    {
        // Fetch all main categories and products with related subcategories
        $mainCategories = MainCategory::all();
        $products = Product::with('mainCategory', 'subCategory')->latest()->get();

        // Pass the mainCategories along with products to the view
        return view('admin.admin-product-details', compact('mainCategories', 'products'));
    }

    public function addProduct(Request $request)
    {
        $validated = $request->validate([
            'main_cat' => 'required|exists:main_categories,id',
            'sub_cat' => 'nullable|exists:sub_categories,id',
            'pr_title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug',
            'pr_desc' => 'nullable|string',
            'rate_sqm' => 'nullable|string|max:255',
            'glass_spec' => 'nullable|string|max:255',
            'dimensions' => 'nullable|string|max:255',
            'profile_type' => 'nullable|string|max:255',
            'hardware_spec' => 'nullable|string|max:255',
            'pr_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:8192',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8192',
        ]);

        // Handle primary cover image upload
        $imagePath = $request->file('pr_image')->store('uploads/products', 'public');

        // Handle multi-image gallery / elevation drawings upload
        $galleryPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $galleryPaths[] = $file->store('uploads/products/gallery', 'public');
            }
        }

        $slug = !empty($request->input('slug')) 
            ? Str::slug($request->input('slug')) 
            : Product::generateUniqueSlug($request->input('pr_title'));

        Product::create([
            'main_cat' => $request->input('main_cat'),
            'sub_cat' => $request->input('sub_cat') ?: null,
            'pr_title' => $request->input('pr_title'),
            'slug' => $slug,
            'pr_desc' => $request->input('pr_desc'),
            'rate_sqm' => $request->input('rate_sqm'),
            'glass_spec' => $request->input('glass_spec'),
            'dimensions' => $request->input('dimensions'),
            'profile_type' => $request->input('profile_type'),
            'hardware_spec' => $request->input('hardware_spec'),
            'pr_image' => $imagePath,
            'gallery_images' => $galleryPaths,
        ]);

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function editProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'main_cat' => 'required|exists:main_categories,id',
            'sub_cat' => 'nullable|exists:sub_categories,id',
            'pr_title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:products,slug,' . $product->id,
            'pr_desc' => 'nullable|string',
            'rate_sqm' => 'nullable|string|max:255',
            'glass_spec' => 'nullable|string|max:255',
            'dimensions' => 'nullable|string|max:255',
            'profile_type' => 'nullable|string|max:255',
            'hardware_spec' => 'nullable|string|max:255',
            'pr_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8192',
            'gallery_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:8192',
        ]);

        // Handle primary image replacement if a new file is uploaded
        if ($request->hasFile('pr_image')) {
            if ($product->pr_image && Storage::disk('public')->exists($product->pr_image)) {
                Storage::disk('public')->delete($product->pr_image);
            }
            $product->pr_image = $request->file('pr_image')->store('uploads/products', 'public');
        }

        // Handle appending new gallery images
        $existingGallery = is_array($product->gallery_images) ? $product->gallery_images : [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $file) {
                $existingGallery[] = $file->store('uploads/products/gallery', 'public');
            }
            $product->gallery_images = array_values($existingGallery);
        }

        // Slug handling
        if (!empty($request->input('slug'))) {
            $product->slug = Str::slug($request->input('slug'));
        } elseif ($product->isDirty('pr_title')) {
            $product->slug = Product::generateUniqueSlug($request->input('pr_title'), $product->id);
        }

        $product->main_cat = $request->input('main_cat');
        $product->sub_cat = $request->input('sub_cat') ?: null;
        $product->pr_title = $request->input('pr_title');
        $product->pr_desc = $request->input('pr_desc');
        $product->rate_sqm = $request->input('rate_sqm');
        $product->glass_spec = $request->input('glass_spec');
        $product->dimensions = $request->input('dimensions');
        $product->profile_type = $request->input('profile_type');
        $product->hardware_spec = $request->input('hardware_spec');
        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function deleteGalleryImage(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $imagePath = $request->input('image_path');

        if ($imagePath && is_array($product->gallery_images)) {
            $gallery = $product->gallery_images;
            if (($key = array_search($imagePath, $gallery)) !== false) {
                if (Storage::disk('public')->exists($imagePath)) {
                    Storage::disk('public')->delete($imagePath);
                }
                unset($gallery[$key]);
                $product->gallery_images = array_values($gallery);
                $product->save();

                return response()->json(['status' => 'success', 'message' => 'Image removed successfully.']);
            }
        }

        return response()->json(['status' => 'error', 'message' => 'Image not found.'], 404);
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete primary cover image
        if ($product->pr_image && Storage::disk('public')->exists($product->pr_image)) {
            Storage::disk('public')->delete($product->pr_image);
        }

        // Delete all gallery images
        if (is_array($product->gallery_images)) {
            foreach ($product->gallery_images as $galleryImg) {
                if ($galleryImg && Storage::disk('public')->exists($galleryImg)) {
                    Storage::disk('public')->delete($galleryImg);
                }
            }
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
