<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'pr_desc' => 'nullable|string',
            'pr_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        // Handle image upload
        $imagePath = $request->file('pr_image')->store('product_images', 'public');

        Product::create([
            'main_cat' => $request->input('main_cat'),
            'sub_cat' => $request->input('sub_cat') ?: null,
            'pr_title' => $request->input('pr_title'),
            'pr_desc' => $request->input('pr_desc'),
            'pr_image' => $imagePath,
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
            'pr_desc' => 'nullable|string',
            'pr_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:4096',
        ]);

        // Handle image upload if a new image is provided
        if ($request->hasFile('pr_image')) {
            if ($product->pr_image && Storage::disk('public')->exists($product->pr_image)) {
                Storage::disk('public')->delete($product->pr_image);
            }
            $product->pr_image = $request->file('pr_image')->store('product_images', 'public');
        }

        $product->main_cat = $request->input('main_cat');
        $product->sub_cat = $request->input('sub_cat') ?: null;
        $product->pr_title = $request->input('pr_title');
        $product->pr_desc = $request->input('pr_desc');
        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete the image if it exists
        if ($product->pr_image && Storage::disk('public')->exists($product->pr_image)) {
            Storage::disk('public')->delete($product->pr_image);
        }

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
}
