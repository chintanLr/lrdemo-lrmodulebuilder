<?php

namespace Lrdemo\Lrmodulebuilder\Providers;

use Illuminate\Support\ServiceProvider;

class LrbuilderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'lrmodulebuilder');
    }
}