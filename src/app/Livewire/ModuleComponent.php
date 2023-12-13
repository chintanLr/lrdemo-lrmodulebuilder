<?php

namespace Lrdemo\Lrmodulebuilder\app\Livewire;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use Lrdemo\Lrmodulebuilder\app\Models\Module;
use Livewire\Component;
use Carbon\Carbon;

class ModuleComponent extends Component
{

    
    public $layout = 'components.layouts.app';

    public function render()
    {

        $modules = Module::paginate(10);
        $modules->transform(function ($modules) {
            $modules->formatted_created_at = Carbon::parse($modules->created_at)->format('M d, Y');
            return $modules;
        });

        return view('lrmodulebuilder::livewire.module-index', ['modules' => $modules])->extends('lrmodulebuilder::components.layouts.app');


    }
}
