<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Data Layanan')]
class Layanan extends Component
{
    public function render()
    {
        return view('livewire.pages.layanan');
    }
}
