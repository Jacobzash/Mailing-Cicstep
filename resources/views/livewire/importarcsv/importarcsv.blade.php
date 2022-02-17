<x-app-layout>
    <x-slot name="header">

        <h1 class="focus:outline-none text-4xl lg:text-4xl font-extrabold
        text-center leading-10 text-gray-800  pt-4">PASO 2: MODULO CONTACTOS
        <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">
            IMPORTAR CONTACTOS</p></h1>
    </x-slot>

        <div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="background-image: url(/images/import.png);">
        <div class="absolute bg-black opacity-60 inset-0 z-0"></div>


                <!-- component -->
                <div class=" relative px-4 py-4 min-w-screen min-h-screen  flex items-center justify-center bg-no-repeat bg-cover relative items-center">
                    <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                        <div class="flex flex-col  lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

                            <div class="w-full lg:w-1/4">
                                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-purple-400">
                                    <div class="flex items-center">
                                        <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                              </svg>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <div class="text-lg">230k</div>
                                            <div class="text-sm text-gray-400">Grupos</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/4">
                                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-blue-400">
                                    <div class="flex items-center">
                                        <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <div class="text-lg">3456</div>
                                            <div class="text-sm text-gray-400">Contactos</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/4">
                                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-yellow-400">
                                    <div class="flex items-center">
                                        <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <div class="text-lg">3456</div>
                                            <div class="text-sm text-gray-400">Campañas</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full lg:w-1/4">
                                <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border-red-400">
                                    <div class="flex items-center">
                                        <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                              </svg>
                                        </div>
                                        <div class="flex flex-col justify-center">
                                            <div class="text-lg">12658</div>
                                            <div class="text-sm text-gray-400">Importados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                            <br><br>


                            <div class="flex items-center justify-center">
                            <div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
                            <div class="text-center">
                                <h2 class="mt-5 text-3xl font-bold text-gray-900">
                                    ¡Importar Archivo!
                                </h2>
                                <p class="mt-2 text-base text-gray-400">Importa archivos de excel con extension .csv</p>
                            </div>
                            <form class="mt-8 space-y-3" action="importarcsv/importarcsv" enctype="multipart/form-data" method="POST">
                                @csrf
                                        <div class="grid grid-cols-1 space-y-2">
                                                <label class="text-sm font-bold text-gray-500 tracking-wide">Documento Adjunto</label>
                                                    <div class="flex items-center justify-center w-full">
                                                        <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                                            <div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">

                                                                <div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">

                                                                    <img src="/images/uploadcloud.png" class="img-responsive animate-bounce"/>

                                                                </div>
                                                                <p class="pointer-none text-gray-500 "> <input type="file" name="file" class="hidden"/>
                                                                    <span class="text-sm">Arrastre y suelte archivos aquí <br /> o <a type="file" href="" id="" class="text-blue-600 hover:underline">seleccione un archivo</a> de su computadora</span></p></input>
                                                            </div>


                                                </label>
                                            </div>
                                        </div>
                                                <p class="text-base text-gray-400">
                                                    <span>Tipo de archivos: csv.</span>
                                                    <br>
                                                    <span>Guarde su archivo de Excel en formato csv. <br>Si no sabes como hacerlo, <a href="" id="" class="text-blue-600 hover:underline">Sigue esta guia practica</a></span>

                                                </p>
                                        <div>
                                            <button type="submit"  class="my-5 w-full flex justify-center bg-blue-500 shadow-cyan-500 shadow-xl text-gray-100 p-4  rounded-full tracking-wide
                                                        font-semibold uppercase  focus:outline-none focus:shadow-outline hover:bg-blue-600  cursor-pointer transition ease-in duration-300">
                                            importar archivo
                                        </button>
                                        </div>
                            </form>
                            </div></div>







</div>
</div>



    </div>

    <style>
        .has-mask {
            position: absolute;
            clip: rect(10px, 150px, 130px, 10px);
        }
    </style>

</x-app-layout>
