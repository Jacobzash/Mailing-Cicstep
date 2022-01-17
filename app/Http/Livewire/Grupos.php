<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Grupo;

class Grupos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $namegrupo, $description;
    public $isModalOpen = 0;

    protected $rules = [

        'namegrupo' => 'required',
        'description' => 'required',

];

protected $messages = [
    'namecontacto.required' => 'Los nombres no pueden estar vacios.',

    'lastnamecontacto.required' => 'Los apellidos no pueden estar vacios.',

];


    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.grupos.view', [
            'grupos' => Grupo::latest()
						->orWhere('namegrupo', 'LIKE', $keyWord)
						->orWhere('description', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }

    public function create()
    {

        $this->resetInput();
        $this->openModalPopover();

    }

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetInput()
    {
		$this->namegrupo = null;
		$this->description = null;
    }

    public function store()
    {
        $validatedData = $this->validate();

        Grupo::updateOrCreate(['id' => $this->selected_id], [
			'namegrupo' => $this-> namegrupo,
			'description' => $this-> description
        ]);

        session()->flash('message', $this->selected_id ? 'Grupo actualizado correctamente.' : 'Grupo creado correctamente.');
        $this->closeModalPopover();
        $this->resetInput();
    }

    public function edit($id)
    {
        $record = Grupo::findOrFail($id);

        $this->selected_id = $id;
		$this->namegrupo = $record-> namegrupo;
		$this->description = $record-> description;

        $this->openModalPopover();
    }
    public function delete($id)
    {
        Grupo::find($id)->delete();

        session()->flash('message', 'Grupo Eliminado.');


    }


}
