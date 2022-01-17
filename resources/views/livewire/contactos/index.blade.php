<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-red-600 leading-tight">
            MAILING CICSTEP
        </h2>
    </x-slot>
    <div class="bg-indigo-100 p-10 ">
        <div class="grid auto-cols-auto  gap-1  sm:grid-cols-3">

            <div class=" bg-white rounded-xl shadow-lg p-10">

                    <a href="{{ route('viewcontactos') }}" :active="request()->routeIs('viewcontactos')"  class="group block max-w-xs mx-auto rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-xl space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                        <div class="flex items-center space-x-3">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-sky-500 group-hover:stroke-white " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            <h3 class="text-gray-900 group-hover:text-white text-center sm:text-left font-semibold">Agregar Contactos</h3>

                        </div>
                        <p class="text-gray-500 group-hover:text-white text-center sm:text-left">Agregue nuevos contactos individuales.</p>
                    </a>

            </div>

            <div class="bg-white rounded-xl shadow-lg p-10">
                <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-xl space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                          </svg>

                      <h3 class="text-gray-900 group-hover:text-white text-center sm:text-left font-semibold">Importar Contactos</h3>
                    </div>
                    <p class="text-gray-500 group-hover:text-white text-center sm:text-left">Importe los contactos en archivo (CSV).</p>
                  </a>

            </div>

            <div class="bg-white rounded-xl shadow-lg p-10">
                <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-whitering-1 ring-gray-900/5 shadow-xl space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                          </svg>

                      <h3 class="text-gray-900 group-hover:text-white text-center sm:text-left font-semibold">Copiar Contactos</h3>
                    </div>
                    <p class="text-gray-500 group-hover:text-white text-center sm:text-left">Ingrese los contactos copiados de Excel.</p>
                  </a>

            </div>


        </div>
    </div>

</x-app-layout>
