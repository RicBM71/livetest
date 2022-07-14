<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LogoEmpresa extends Component
{

    public $logo;

    public function mount()
    {
        $this->logo = "Chollo Oro";
    }

    public function render()
    {
        return view('livewire.logo-empresa');
    }
}
