<x-app-layout>
    <x-slot name="header">
        <h1 class="focus:outline-none text-4xl lg:text-4xl font-extrabold
        text-center leading-10 text-gray-800  pt-4">PASO 2: MODULO CONTACTOS
        <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">
            agregar Contactos</p></h1>

    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('contactos')
            </div>
        </div>
    </div>
</x-app-layout>
