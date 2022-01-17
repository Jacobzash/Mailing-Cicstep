        @section('title', __('Contactos'))
        <div>
            <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">
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
                <section class="container mx-auto p-4">

                        <div class="w-full overflow-x-auto">

                            <label class="relative block">
                                <span class="sr-only">Search</span>
                                <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600 shadow-xl" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </span>

                                <input class="placeholder:italic placeholder:text-gray-400 block bg-white w-full border border-gray-300 rounded-2xl py-2 pl-9 pr-3 shadow-lg focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Contactos">
                            </label><br>
                        </div>

                </section>
                    <section class="container mx-auto p-6 font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">

                                <table class="table-auto divide-gray-200 w-full ">
                                <thead>
                                    <tr class="text-sm font-mono tracking-wide text-center text-gray-700 bg-gray-100 divide-white uppercase border-b border-gray-600">
                                        <th scope="col" width="50" class="px-4 py-3">
                                            No.
                                        </th>
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
                                    <tr class="text-gray-900 text-center">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm ">
                                            {{ $loop->iteration }}
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
                                        <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">
                                            NombreGrupos
                                        </td>
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

                                                    <button wire:click="delete({{ $row->id }})"
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
                        </div>
                        @livewire('livewire.vendor.Paginacion''))
                    </section>

                </div>
            </div>
        </div>
    </div>


