<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('dashboard.home')->layout('dashboard.layouts.app');
    }
}
