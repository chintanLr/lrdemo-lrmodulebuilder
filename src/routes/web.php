<?php
use Illuminate\Support\Facades\Route;


Route::group(
    [
        'namespace'  => 'Lrdemo\Lrmodulebuilder\app\Livewire',
    ],
    function () {
        Route::get('builder', ModuleComponent::class);
    }
);