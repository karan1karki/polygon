<?php

namespace App\Providers;

use App\Observers\TeamMemberObserver;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use App\TeamMember;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $home_page_variant = get_static_option('home_page_variant');
        view()->share(compact('home_page_variant'));
        if (get_static_option('site_force_ssl_redirection') === 'on') {
            URL::forceScheme('https');
        }
        TeamMember::observe(TeamMemberObserver::class);
    }
}