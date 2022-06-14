<?php

namespace App\Http\Livewire\Dashboard\Home;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('dashboard.home.home')->layout('dashboard.layouts.app');
    }
}
