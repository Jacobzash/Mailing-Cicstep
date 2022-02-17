<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contacto;
use App\Models\Grupo;
use App\Exports\ContactosExport;


class Contactos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'tailwind';
    public $selected_id, $keyWord, $namecontacto, $lastnamecontacto;
    public $email, $phonecontacto, $contacto, $gruposid, $search = '', $msj;
    public $isModalOpen = 0;
    public $paginate = 10;

    public $selectedgrupos = null;
    public $sortBy = 'asc';
    public $checked = [];



    public function mount(){
        $this->gruposid='Elegir';
    }

    protected $listeners = ['delete'];



    protected $rules = [

            'namecontacto' => 'required',
            'lastnamecontacto' => 'required',
            'email' => 'required|email',
            'phonecontacto' => 'required',
            'gruposid' => 'required|not_in:Elegir',
    ];

    protected $messages = [
        'namecontacto.required' => 'Los nombres no pueden estar vacios.',

        'lastnamecontacto.required' => 'Los apellidos no pueden estar vacios.',

        'email.required' => 'El correo no puede estar vacio.',
        'email.email' => 'El formato del correo no es valido.',

        'phonecontacto.required' => 'El telefono no puede estar vacio.',

        'gruposid.not_in' => 'Seleccione un grupo por favor.',

    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function render()
    {
        sleep(1);

        $keyWord = '%'.$this->keyWord .'%';


        if(strlen($this->search)>0)
            $contactos =Contacto::join('grupos as g','g.id','contactos.gruposid')

                        ->orWhere('namecontacto', 'LIKE', $keyWord)
						->orWhere('lastnamecontacto', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('phonecontacto', 'LIKE', $keyWord)
                        ->select('contactos.*','g.namegrupo as grupos')
                        ->orderBy('contactos.namecontacto',$this->sortBy)
                        ->when($this->selectedgrupos, function($query){
                            $query->where('gruposid',$this->selectedgrupos);
                            })
                        ->search(trim($this->search))
                        ->paginate(10);
        else
            $contactos =Contacto::join('grupos as g','g.id','contactos.gruposid')

                            ->select('contactos.*','g.namegrupo as grupos')
                            ->orderBy('contactos.namecontacto','asc')
                            ->paginate(10);


        return view('livewire.contactos.show', [
            'contactos' => $contactos,

            'grupos' => Grupo::orderBy('namegrupo',$this->sortBy)->get(),

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
        'phonecontacto' => $this-> phonecontacto,
        'gruposid' => $this->gruposid
        ]);



        $this->closeModalPopover();
        $this->msj="Guardado Correctamente";

        $this->emit('savecontacto',$this->msj);
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
        $this->gruposid = $record-> gruposid;


        $this->openModalPopover();

    }


    public function delete(Contacto $id)
    {
        $id->delete();


    }
































    public function updatedChecked()
    {
        $this->selectPage = false;
    }


    public function deleteRecords()
    {
        $contactos=Contacto::whereKey($this->checked);
        $contactos->delete();
        $this->checked = [];
        $this->selectAll = false;
        $this->selectPage = false;
        $this->msj="Eliminados Correctamente";

        $this->emit('deleteallcontac',$this->msj);
    }



    public function isChecked($selected_id)
    {
        return in_array($selected_id, $this->checked);
    }


}
