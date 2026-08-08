<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
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
        Paginator::useBootstrapFive();

        // Share cached website settings across all Blade views for fast server performance
        if (! $this->app->runningInConsole() && Schema::hasTable('settings')) {
            $settings = Cache::remember('site_settings', 86400, function () {
                return Setting::pluck('value', 'key')->toArray();
            });

            View::share('settings', $settings);
        }

        // View Composer for Admin Sidebar counts caching to maximize server speed (0 DB queries on render)
        View::composer('admin.components.sidebar', function ($view) {
            $sidebarCounts = Cache::remember('admin_sidebar_counts', 60, function () {
                return [
                    'courses' => Schema::hasTable('courses') ? DB::table('courses')->count() : 0,
                    'admissions' => Schema::hasTable('admissions') ? DB::table('admissions')->count() : 0,
                    'blogs' => Schema::hasTable('blogs') ? DB::table('blogs')->count() : 0,
                    'categories' => Schema::hasTable('blog_categories') ? DB::table('blog_categories')->count() : 0,
                    'tags' => Schema::hasTable('blog_tags') ? DB::table('blog_tags')->count() : 0,
                    'galleries' => Schema::hasTable('galleries') ? DB::table('galleries')->count() : (Schema::hasTable('gallery_images') ? DB::table('gallery_images')->count() : 0),
                    'testimonials' => Schema::hasTable('testimonials') ? DB::table('testimonials')->count() : 0,
                    'faqs' => Schema::hasTable('faqs') ? DB::table('faqs')->count() : 0,
                    'unread_notifications' => Schema::hasTable('notifications') ? DB::table('notifications')->where('is_read', false)->count() : 0,
                    'contact_enquiries' => Schema::hasTable('contact_enquiries') ? DB::table('contact_enquiries')->count() : 0,
                    'brochure_requests' => Schema::hasTable('brochure_enquiries') ? DB::table('brochure_enquiries')->count() : 0,
                ];
            });

            $view->with('sidebarCounts', $sidebarCounts);
        });
    }
}
