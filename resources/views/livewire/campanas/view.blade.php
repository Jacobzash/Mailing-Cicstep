<x-app-layout>
    <x-slot name="header">

        <h1 class="focus:outline-none text-4xl lg:text-4xl font-extrabold
        text-center leading-10 text-gray-800  pt-4">PASO 3:
        <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-purple-500 via-red-400 to-purple-500">
            MODULO CAMPAÑAS</p></h1>
    </x-slot>

            <div>
                @livewire('campanas')
            </div>

</x-app-layout>
