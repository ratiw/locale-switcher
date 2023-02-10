<?php

namespace Ratiw\LocaleSwitcher;

use App\Http\Middleware\SetLocale;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class LocaleSwitcherServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('locale', SetLocale::class);
    }

    public function register(): void
    {

    }

    public function provides()
    {
        return ['locale-switcher'];
    }

    protected function bootForConsole(): void
    {

    }
}