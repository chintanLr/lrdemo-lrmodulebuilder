<?php

namespace Lrdemo\Lrmodulebuilder\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LrbuilderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'lrmodulebuilder');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'lrmodulebuilder-migrations');

    }
}