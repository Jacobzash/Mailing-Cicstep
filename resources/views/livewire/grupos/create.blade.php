<!-- Modal -->
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
				<form>
                    <form>
                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="">

                                <div class="mb-4">
                                    <label for="namegrupo" class="after:content-['*'] after:ml-0.5
                                    after:text-red-500 block font-medium text-sm text-gray-700">
                                    Nombre
                                    </label>

                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                              </svg>
                                        </div>

                                    <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10
                                    pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                        id="namegrupo" placeholder="Ingrese Nombre" wire:model="namegrupo">
                                    @error('namegrupo') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="after:content-['*'] after:ml-0.5
                                    after:text-red-500 block font-medium text-sm text-gray-700">Descripcion</label>
                                    <div class="relative">
                                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                              </svg>
                                        </div>
                                    <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                                    rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                                        id="description" placeholder="Descripcion" wire:model="description">
                                    @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                                </div>
                            </div>
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

