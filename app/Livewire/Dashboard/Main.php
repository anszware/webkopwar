<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Dashboard')]
class Main extends Component
{
    public function render()
    {
        return view('livewire.dashboard.main');
    }
}
