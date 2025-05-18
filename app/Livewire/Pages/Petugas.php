<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Data Petugas')]
class Petugas extends Component
{
    public function render()
    {
        return view('livewire.pages.petugas');
    }
}
