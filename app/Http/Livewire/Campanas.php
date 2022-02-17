<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;
use Livewire\WithPagination;

class Campanas extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $isModalOpen = 0;

    public function render()
    {
        return view('livewire.campanas.campanas',[
            'grupos' => Grupo::all(),
        ]);
    }
}
