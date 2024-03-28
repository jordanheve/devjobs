<?php

namespace App\Livewire;

use Livewire\Component;

class MostarVacante extends Component
{
    public $vacante;
    public function render()
    {
        return view('livewire.mostar-vacante');
    }
}
