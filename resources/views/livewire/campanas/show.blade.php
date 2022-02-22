<x-app-layout>
    <x-slot name="header">

        <h1 class="focus:outline-none text-4xl lg:text-4xl font-extrabold
        text-center leading-10 text-gray-800  pt-4">PASO 3:
        <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">
            MODULO CAMPAÑAS - VER CAMPAÑAS</p></h1>
    </x-slot>
            <x-jet-nav-link href="{{ route('calendario') }}" :active="request()->routeIs('calendario')">
                <button  type="button" href="{{ route('contactos') }}" :active="request()->routeIs('contactos')"
                    class=" bg-gradient-to-r from-pink-700 to-fuchsia-700
                    hover:from-lime-500 hover:to-emerald-500  text-white
                        text-lg font-bold py-2 px-4 rounded-xl shadow-xl  uppercase tracking-widest
                        outline-none focus:ring-4
                    transform active:scale-x-75 transition-transform mx-5 flex">

                        <span class="ml-4">siguiente paso</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                </button></x-jet-nav-link>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- Breadcrumb -->
                <nav class="flex py-3 px-5 text-gray-700 bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">

                        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                        Inicio
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>

                        <a href="{{ route('campanas') }}" :active="request()->routeIs('campanas')" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Campañas</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2 dark:text-gray-500">Ver Campañas</span>
                        </div>
                    </li>
                    </ol>
                </nav>


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

                        <section class="container mx-52 sm:mx-auto md:mx-auto p-4">

                                @include('livewire.componentes.search')

                        </section>
                            <section class="container mx-auto p-6 font-mono">
                                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                                <div class="w-full overflow-x-auto">

                                        <table class="table-auto divide-gray-200 w-full ">
                                        <thead>
                                            <tr class="text-md font-mono tracking-wide text-center text-gray-700 bg-gray-100 divide-white uppercase border-b border-gray-600">

                                                <th scope="col" width="50" class="px-4 py-3">
                                                    Titulo
                                                </td>
                                                <th scope="col" class="px-4 py-3">
                                                    Para
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    De
                                                </th>
                                                <th scope="col" class="px-4 py-3">
                                                    Asunto
                                                </td>
                                                <th scope="col" class="px-4 py-3">
                                                    ACCIONES
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">

                                            <tr class="text-gray-900 items-center text-center">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm ">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm border border-gray-100">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm  font-sm border border-gray-100">

                                                    <div class="flex items-center space-x-1">
                                                        <button
                                                        class="flex px-4 py-2
                                                        bg-gradient-to-r from-teal-400 via-cyan-400 to-sky-400
                                                        text-white  text-sm sm:text-base text-right font-bold rounded-2xl shadow-xl outline-none
                                                        focus:ring-4 transform active:scale-x-75 transition-transform mx-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        <span class="ml-4">Editar</span>
                                                        </button>

                                                        <button
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

                                        </tbody>
                                    </table>


                                    </div>
                                </div>

                            </section>

                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
