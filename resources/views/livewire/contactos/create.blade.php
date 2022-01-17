<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">


            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="">

                            <div class="mb-4">
                                <label for="namecontacto" class="after:content-['*'] after:ml-0.5 after:text-red-500 block font-medium text-sm text-gray-700">Nombres</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                    </div>

                                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                    id="namecontacto" placeholder="Ingrese Nombres" wire:model="namecontacto">
                                @error('namecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            </div>


                            <div class="mb-4">
                                <label for="lastnamecontacto" class="after:content-['*'] after:ml-0.5
                                after:text-red-500 block font-medium text-sm text-gray-700">Apellidos</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                          </svg>
                                    </div>
                                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                    id="lastnamecontacto" placeholder="Ingrese Apellidos" wire:model="lastnamecontacto">
                                @error('lastnamecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="after:content-['*'] after:ml-0.5 after:text-red-500
                                block font-medium text-sm text-gray-700">Email</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                          </svg>
                                    </div>
                                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                    id="email" placeholder="Email address" wire:model="email">

                                @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                            </div>

                            <div class="mb-4">
                                <label for="phonecontacto" class="after:content-['*'] after:ml-0.5
                                after:text-red-500 block font-medium text-sm text-gray-700">Telefono</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                          </svg>
                                    </div>
                                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                    id="phonecontacto" placeholder="Telefono de Contacto" wire:model="phonecontacto">
                                @error('phonecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div></div>
                        </div>
                    </div>

                    <div class="flex w-full space-x-8 items-center justify-center px-4 py-3 bg-gray-50 text-right sm:px-6">

                        <button wire:click="closeModalPopover()" type="button"
                            class="bg-gradient-to-r from-pink-500 to-fuchsia-500
                             hover:from-red-500 hover:to-rose-500  text-white
                             text-lg font-bold py-2 px-4 rounded-xl shadow-xl  uppercase tracking-widest
                             outline-none focus:ring-4
                            transform active:scale-x-75 transition-transform mx-5 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                                </svg>
                                <span class="ml-4">CERRAR</span>

                            </button>

                            <button wire:click.prevent="store()" type="button" class="bg-gradient-to-r
                            from-cyan-500 to-blue-500 hover:from-lime-500 hover:to-emerald-500
                            text-white text-lg font-bold py-2 px-4 rounded-xl shadow-xl  uppercase tracking-widest
                            outline-none focus:ring-4
                            transform active:scale-x-75 transition-transform mx-5 flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            <span class="ml-4">Guardar</span>
                            </button>




                    </div>


                </div>
            </form>
        </div>
    </div>
</div>

