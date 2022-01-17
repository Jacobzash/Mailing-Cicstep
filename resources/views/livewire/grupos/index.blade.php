<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-red-600 leading-tight">
            MAILING CICSTEP
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('grupos')
            </div>
        </div>
    </div>


</x-app-layout>
