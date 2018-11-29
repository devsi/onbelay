<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // custom component aliases
        Blade::component('components.partner-card', 'partner');
        Blade::component('components.profile-card', 'profile');
        Blade::component('components.request-card', 'request');

        // custom view composers
        View::composer(
            'components.profile-card', 'App\Http\ViewComposers\ProfileViewComposer'
        );

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path('web');
        });
    }
}
