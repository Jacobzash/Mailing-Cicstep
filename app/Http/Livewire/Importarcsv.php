<?php

namespace App\Http\Livewire;

use Livewire\Component;


use App\Models\Contacto;
use App\Models\Grupo;
use App\Imports\ContactosImport;
use Illuminate\Http\Request;

class Importarcsv extends Component
{
    public function render()
    {
        return view('livewire.importarcsv.importarcsv');
    }

    public function store(Request $request)
    {
        $file = $request->file('file')->store('import');

        $import = new ContactosImport;
        $import->import($file);

        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }


        return back()->withStatus('Import in queue, we will send notification after import finished.');
    }
}
