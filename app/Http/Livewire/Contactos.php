<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contacto;

class Contactos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $namecontacto, $lastnamecontacto, $email, $phonecontacto, $contacto;
    public $isModalOpen = 0;

    protected $rules = [

            'namecontacto' => 'required',
            'lastnamecontacto' => 'required',
            'email' => 'required|email',
            'phonecontacto' => 'required',
    ];

    protected $messages = [
        'namecontacto.required' => 'Los nombres no pueden estar vacios.',

        'lastnamecontacto.required' => 'Los apellidos no pueden estar vacios.',

        'email.required' => 'El correo no puede estar vacio.',
        'email.email' => 'El formato del correo no es valido.',

        'phonecontacto.required' => 'El telefono no puede estar vacio.',

    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.contactos.show', [
            'contactos' => Contacto::latest()
						->orWhere('namecontacto', 'LIKE', $keyWord)
						->orWhere('lastnamecontacto', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('phonecontacto', 'LIKE', $keyWord)
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
		$this->namecontacto = null;
		$this->lastnamecontacto = null;
		$this->email = null;
		$this->phonecontacto = null;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        Contacto::updateOrCreate(['id' => $this->selected_id], [
			'namecontacto' => $this-> namecontacto,
			'lastnamecontacto' => $this-> lastnamecontacto,
			'email' => $this-> email,
			'phonecontacto' => $this-> phonecontacto
        ]);

        session()->flash('message', $this->selected_id ? 'Contacto actualizado correctamente.' : 'Contacto creado correctamente.');
        $this->closeModalPopover();
        $this->resetInput();


    }



    public function edit($id)
    {
        $record = Contacto::findOrFail($id);

        $this->selected_id = $id;
		$this->namecontacto = $record-> namecontacto;
		$this->lastnamecontacto = $record-> lastnamecontacto;
		$this->email = $record-> email;
		$this->phonecontacto = $record-> phonecontacto;

        $this->openModalPopover();

    }


    public function delete($id)
    {
        Contacto::find($id)->delete();

        session()->flash('message', 'Contacto Eliminado.');


    }


}
