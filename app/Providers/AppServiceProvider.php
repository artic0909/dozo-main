<?php

namespace App\Providers;

use App\Models\AdminAboutCompanyModel;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer(['frontend.*', 'error-page'], function ($view) {
            try {
                if (Schema::hasTable('main_categories') && !$view->offsetExists('maincategories')) {
                    $view->with('maincategories', MainCategory::all());
                }
                if (Schema::hasTable('admin_about_company_models') && !$view->offsetExists('aboutDetails')) {
                    $view->with('aboutDetails', AdminAboutCompanyModel::all());
                }
            } catch (\Exception $e) {
                // Graceful fallback during migration/setup
            }
        });
    }
}

