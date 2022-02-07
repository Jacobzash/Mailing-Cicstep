<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Grupo;
use App\Models\Contactos;

class Calendario extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $isModalOpen = 0;


    public function render()
    {
        return view('livewire.calendario.calendario');
    }
}
