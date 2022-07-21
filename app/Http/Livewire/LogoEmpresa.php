<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LogoEmpresa extends Component
{

    public $logo;
    public $descripcion;

    public function mount()
    {
        $this->logo        = "Chollo Oro";
        $this->descripcion = "Cl Arenal, 8";
    }

    public function render()
    {
        return view('livewire.logo-empresa');
    }
}
