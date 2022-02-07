        @section('title', __('Contactos'))
        <div>
            <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8 ">
                @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
                @endif
                <section class="container mx-auto p-4">

                    <div class="flex w-full overflow-x-auto">


                        <button wire:click="create()" class="bg-gradient-to-r
                        from-green-400 to-blue-500 hover:from-indigo-500 hover:to-purple-500
                        text-white  text-lg sm:text-base text-right font-bold
                        py-3 px-4 rounded-2xl shadow-2xl outline-none focus:ring-4
                        transform active:scale-x-75 transition-transform mx-5 flex">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current text-white text-left "
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                            </svg>
                            <span class="ml-4">Añadir Contacto</span>

                        </button>

                        @if($isModalOpen)
                        @include('livewire.contactos.create')
                        @endif

                    </div>
                </section>
                <section class="flex justify-between content-center mb-2" >
                    <div class="flex">

                        <div>
                            <div class="flex items-center ml-4">
                                <label for="" class="font-sans mr-2 mb-0">Filtrar Grupo</label>
                                <select wire:model="selectedgrupos">
                                    <option value="">Grupos...</option>
                                    @foreach ($grupos as $item)
                                    <option value="{{ $item->id }}">{{ $item->namegrupo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <br>
                        <div class="flex max-w-lg mx-auto">
                                @if ($checked)
                                <div>
                                    <div class="flex items-center ml-4">
                                        <label for="paginate" class="font-sans mr-2 mb-0">Cambiar o Eliminar</label>
                                        <select >
                                            <option value="">Seleccione...</option>
                                            <option onclick="confirm('Are you sure you want to delete these Records?') || event.stopImmediatePropagation()"
                                            wire:click="deleteRecords()">
                                                Eliminar
                                                </option>
                                            @foreach ($grupos as $item)
                                            <option value="{{ $item->id }}">{{ $item->namegrupo }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
                        </div>




                        <div class="flex items-center ml-4">
                            <label for="">Pagina</label>
                            <select class="form-control" wire:model="paginate">
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">20</option>
                            </select>
                        </div>

                        <div class="flex items-center ml-4">
                            <label for="">Ordenar: </label>
                            <select wire:model="sortBy">
                                <option value="asc">ASC</option>
                                <option value="desc">DESC</option>
                            </select>
                        </div>

                        <div class="w-72 overflow-x-auto">
                            <label class="relative block">
                                <span class="sr-only">Search</span>
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600 shadow-xl" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </span>

                                <input class="placeholder:italic placeholder:text-gray-400 block bg-white w-full border
                                border-gray-300 rounded-2xl py-2 pl-9 pr-3 shadow-lg focus:outline-none focus:border-sky-500
                                focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                wire:model.debounce.500ms="search" type="search" placeholder="Buscar....">
                            </label><br>

                        </div>

                    </div>
                </section>
                    <section class="container mx-auto p-2 font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xl">
                        <div class="w-full overflow-x-auto">

                                <table class="table-auto divide-gray-200 w-full ">
                                <thead>
                                    <tr class="text-sm font-mono tracking-wide text-center text-gray-700 bg-gray-100 divide-white uppercase border-b border-gray-600">
                                        <th class="px-4 py-3"><input type="checkbox" wire:model="selectPage"></th>
                                        <th scope="col" class="px-4 py-3">
                                            Nombres
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Apellidos
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Telefono
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Grupo
                                        </th>
                                        <th scope="col" class="px-4 py-3">
                                            Acciones
                                        </th>

                                    </tr>
                                    </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach($contactos as $row)
                                    <tr class="text-gray-900 text-center @if ($this->isChecked($row->id))
                                    @endif">
                                        <td>
                                            <input type="checkbox" value="{{ $row->id }}" wire:model="checked">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">
                                            {{ $row->namecontacto }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">
                                            {{ $row->lastnamecontacto }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-bold leading-tight text-green-600
                                        rounded-2xl border border-gray-100">
                                            {{ $row->email }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-ms font-bold border border-gray-100">
                                            {{ $row->phonecontacto }}
                                        </td>
                                        @foreach ($grupos as $grupo)
                                        @if ($grupo->id==$row->gruposid)

                                        <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">
                                            {{ $grupo->namegrupo }}
                                        </td>
                                        @endif
                                        @endforeach
                                        <td class="px-6 py-4 whitespace-nowrap text-sm  font-sm border border-gray-100">

                                            <div class="flex items-start space-x-1">
                                                <button wire:click="edit({{ $row->id }})"
                                                    class="flex px-4 py-2
                                                    bg-gradient-to-r from-teal-400 via-cyan-400 to-sky-400
                                                    text-white  text-sm sm:text-base text-right font-bold rounded-2xl shadow-xl outline-none
                                                    focus:ring-4 transform active:scale-x-75 transition-transform mx-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                        </svg>
                                                    <span class="ml-4">Editar</span>
                                                    </button>

                                                    <button  wire:click="$emit('deletecontactos',{{ $row->id }})"
                                                    class="flex px-4 py-2
                                                    bg-gradient-to-r from-red-500 via-rose-400 to-red-500
                                                    text-white  text-sm sm:text-base text-right font-bold rounded-2xl shadow-xl outline-none
                                                    focus:ring-4 transform active:scale-x-75 transition-transform mx-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    <span class="ml-4">Borrar</span>
                                                    </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            </div>
                            <div class=" px-80 py-6 ">

                                    {{ $contactos->links() }}

                            </div>
                        </div>

                    </section>

                </div>
            </div>
        </div>

        @push('js')
            <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
            <script src="sweetalert2.all.min.js"></script>

            <script>
                Livewire.on('deletecontactos', contactosid => {

                    Swal.fire({
                        title: '¿Estas Seguro?',
                        text: "Esta accion no se revertirá!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, borralo!'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            Livewire.emitTo('contactos','delete',contactosid);
                            Swal.fire(
                            'Eliminado!',
                            'El archivo ha sido borrado.',
                            'success'
                            )
                        }
                    })
                })


            </script>


<script>
    Livewire.on('deleteallcontactos' => {

        Swal.fire({
            title: '¿Estas Seguro?',
            text: "Esta accion no se revertirá!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borralo!'
            }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emitTo('contactos','deleteRecords');
                Swal.fire(
                'Eliminado!',
                'El archivo ha sido borrado.',
                'success'
                )
            }
        })
    })


</script>


            <script>

                Livewire.on('savecontacto',(msj)=>{
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (msj),
                        showConfirmButton: false,
                        timer: 2000
                        })
                    })

            </script>


            <script>

                Livewire.on('deletecontacto',(msj)=>{
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (msj),
                        showConfirmButton: false,
                        timer: 2000
                        })
                    })

            </script>


            <script>

                Livewire.on('deleteallcontac',(msj)=>{
                        Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (msj),
                        showConfirmButton: false,
                        timer: 2000
                        })
                    })

            </script>
        @endpush

    </div>
