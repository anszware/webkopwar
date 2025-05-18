<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Data Anggota')]
class Anggota extends Component
{
    public function render()
    {
        return view('livewire.pages.anggota');
    }
}
