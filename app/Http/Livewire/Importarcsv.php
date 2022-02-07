<?php

namespace App\Http\Livewire;

use Livewire\Component;


use App\Models\Contactos;
use Illuminate\Http\Request;

class Importarcsv extends Component
{
    public function render()
    {
        return view('livewire.importarcsv.importarcsv');
    }
}
