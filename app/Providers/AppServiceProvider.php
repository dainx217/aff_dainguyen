<?php

namespace App\Providers;

use App\Models\Blog\Menu;
use App\Models\Uni_Category;
use App\Models\Configuration;
use App\Models\Education\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        try {
            $configuration = Configuration::first();
        } catch (\Exception $exception) {

        }

        \View::share('configuration', $configuration ?? []);
    }
}
