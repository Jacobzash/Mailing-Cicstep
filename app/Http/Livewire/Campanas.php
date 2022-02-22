<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Grupo;
use App\Models\Campana;
use Livewire\WithPagination;

class Campanas extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $selected_id, $keyWord, $namecampana, $email;
    public $asunto, $contenido, $gruposid, $msj;
    public $ModalOpen = false;
    public $paginate = 10;



    public function mount(){
        $this->gruposid='Elegir';
    }

    protected $rules = [

            'namecampana' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required',
            'gruposid' => 'required|not_in:Elegir',
    ];


    protected $messages = [
        'namecampana.required' => 'El nombre no puede estar vacio.',


        'email.required' => 'El Remitente no puede estar vacio.',
        'email.email' => 'El formato del correo no es valido.',

        'asunto.required' => 'El asunto no puede estar vacio.',

        'gruposid.not_in' => 'Seleccione un grupo por favor.',

    ];

    protected $validationAttributes = [
        'email' => 'email address'
    ];


    public function render()
    {
        sleep(1);

        $keyWord = '%'.$this->keyWord .'%';



        $campanas =Campana::join('grupos as g','g.id','campanas.gruposid')

                    ->orWhere('namecampana', 'LIKE', $keyWord)
                    ->orWhere('de', 'LIKE', $keyWord)
                    ->orWhere('asunto', 'LIKE', $keyWord)
                    ->orWhere('contenido', 'LIKE', $keyWord)
                    ->select('campanas.*','g.namegrupo as grupos');

        return view('livewire.campanas.campanas',[

            'grupos' => Grupo::all(),
        ]);
    }


    public function create()
    {
        $this->openModalPopover();
    }

    public function sendmail()
    {
        $this->openModalPopover();
    }

    public function openModalPopover()
    {
        $this->ModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->ModalOpen = false;
    }


    public function store()
    {

        $validatedData = $this->validate();

        Campana::updateOrCreate(['id' => $this->selected_id], [
        'namecampana' => $this-> namecampana,
        'email' => $this-> email,
        'asunto' => $this-> asunto,
        'contenido' => $this-> contenido,
        'gruposid' => $this->gruposid
        ]);



        $this->closeModalPopover();



    }

}
