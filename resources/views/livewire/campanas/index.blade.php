<x-app-layout>
    <x-slot name="header">

        <h1 class="focus:outline-none text-4xl lg:text-4xl font-extrabold
        text-center leading-10 text-gray-800  pt-4">PASO 3:
        <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">
            MODULO CAMPAÑAS</p></h1>
    </x-slot>

    <div>
        <div class="max-w-full mx-auto md:container md:mx-auto  py-12 sm:px-6 lg:px-8">
            <!-- component -->
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

                <div class="max-w-full mx-auto flex justify-center">
                    <div class="shadow-gray-500 shadow-2xl sm:rounded-2xl
                    bg-gradient-to-r from-indigo-500 via-violet-600 to-indigo-700
                    md:py-2 md:px-8 px-4  xl:px-8 xl:py-16">
                        <div>
                            <div class="flex flex-wrap items-center md:flex-row flex-col-reverse">
                                <div class="md:w-2/3 w-full pb-6 md:pb-0 md:pr-6 flex-col md:block flex items-center justify-center md:pt-0 pt-4">
                                    <!--Aspectradio video General-->
                                    <div class="px-5 max-w-screen-xl sm:w-auto">
                                        <div class="aspect-w-10 aspect-h-5 ">
                                            <iframe src="/images/Indila.mp4" class="origin-bottom -rotate-6 rounded-xl shadow-2xl shadow-gray-800" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="md:w-1/3 w-2/3">
                                <img src="/images/flamemarketing.png"   alt="campanas">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>


    <!--Steps Contactos-->

    <!-- component -->
        <div class="flex flex-col justify-center m-auto">
            <div class="flex md:flex-row flex-col bg-teal-200 justify-center md:text-left text-center">






        <!--Step1 Add Grupos-->
            <div class="flex flex-col justify-center items-center relative">
                <div class="w-56 h-12 md:flex hidden justify-center">
                    <div class="h-full  border-teal-300 border-dashed"></div>
                </div>
                <div class="rounded-full w-12 h-12 text-xl text-teal-100 bg-teal-700 font-black flex justify-center items-center absolute top-0 right-0 mt-16 shadow-lg mr-2">1</div>

                <img src="https://img.icons8.com/fluency/250/000000/group-task.png"
                class="transform hover:translate-y-6 hover:translate-x-5 hover:scale-150 transition
                duration-300 img-responsive w-56 h-56 rounded-full shadow my-5 object-scale-down" alt="Step1"/>
                <div class="w-56 h-12 md:flex hidden justify-center">
                    <div class="h-full border-r-4 border-teal-300 border-dashed"></div>
                </div>
            </div>
            <div class="ml-5 p-10 flex flex-col justify-center max-w-2xl rounded bg-teal-200">
                <div class="md:text-3xl uppercase text-xl font-extrabold text-teal-700">Paso 1</div>
                <div class="md:text-3xl uppercase text-xl font-extrabold text-gray-800">Crear Grupos o Etiquetas</div>
                <div class="mt-4 text-teal-800 font-bold text-lg text-justify">
                    Debemos crear los grupos o etiquetas que nos permitirá identificar a nuestra base de contactos para
                    crear las campañas. Solo debemos ingresar el nombre asignado y evitar repeticiones para tener un mejor
                    control de cada grupo.
                </div>

            </div>

            </div>







        <!--Step2 Add Contactos-->
            <div class="flex md:flex-row flex-col bg-pink-200 justify-center md:text-left text-center">
                <div class="flex flex-col justify-center items-center relative">
                    <div class="w-56 h-12 md:flex hidden justify-center">
                        <div class="h-full border-r-4 border-pink-300 border-dashed"></div>
                    </div>
                    <div class="rounded-full w-12 h-12 text-xl text-pink-100 bg-pink-700 font-black flex justify-center items-center absolute top-0 right-0 mt-16 shadow-lg mr-2">2</div>
                    <img alt="step2" class="transform hover:translate-y-6 hover:translate-x-5 hover:scale-150
                    transition duration-300 w-56 h-56 rounded-full shadow my-5 object-scale-down"
                    src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/>
                    <div class="w-56 h-12 md:flex hidden justify-center">
                        <div class="h-full  border-pink-300 border-dashed"></div>
                    </div>
                </div>
                <div class="ml-5 p-10 flex flex-col justify-center max-w-2xl rounded bg-pink-200">
                    <div class="md:text-3xl uppercase text-xl font-extrabold text-pink-500">Paso 2</div>
                    <div class="md:text-3xl uppercase text-xl font-extrabold text-gray-800">Crear o Editar Contactos</div>
                    <div class="mt-4 text-pink-800 font-bold text-lg text-justify">
                        Una vez creado el grupo, procedemos a crear los contactos para el envío de mensajes. En esta parte
                        creamos los contactos digitando directamente en cada una de las casillas la información requerida.
                        También podemos editar y eliminar los contactos que subamos.
                    </div>
                </div>

                </div>







        <!--Step3 Create Campanas-->
            <div class="flex md:flex-row flex-col bg-indigo-300 justify-center md:text-left text-center">
            <div class="flex flex-col justify-center items-center relative">
                <div class="w-56 h-12 md:flex hidden justify-center">
                    <div class="h-full border-r-4 border-indigo-300 border-dashed"></div>
                </div>
                <div class="rounded-full w-12 h-12 text-xl text-indigo-100 bg-indigo-700 font-black flex justify-center items-center absolute top-0 right-0 mt-16 shadow-lg mr-2">3</div>
                <img src="https://img.icons8.com/clouds/250/000000/commercial.png" class="transform hover:translate-y-6 hover:translate-x-5 hover:scale-150 transition
                duration-300 w-56 h-56 rounded-full shadow my-5 object-scale-down" alt="step3"/>
                <div class="w-56 h-12 md:flex hidden justify-center">
                    <div class="h-full border-r-4 border-indigo-300 border-dashed"></div>
                </div>
            </div>
            <div class="ml-5 p-10 flex flex-col justify-center max-w-2xl rounded bg-indigo-300">
                <div class="md:text-3xl uppercase text-xl font-extrabold text-indigo-700">Paso 3</div>
                <div class="md:text-3xl uppercase text-xl font-extrabold text-gray-800">Crear Campañas</div>
                <div class="mt-4 text-indigo-800 font-bold text-lg text-justify">
                    Para crear una campaña se debe seguir una secuencia de pasos y completar la información requerida.
                </div>
            </div>
            <x-jet-nav-link href="{{ route('viewcampanas') }}" :active="request()->routeIs('viewcampanas')">
                <img src="https://img.icons8.com/nolan/70/filled-sent.png" role="button"
                    class="img-responsive w-20 h-20 rounded-full shadow-lg my-5 object-scale-down
                    transform hover:object-scale-down  hover:rotate-90  hover:translate-y-5 hover:scale-150 transition duration-300 shadow-gray-500" alt="gotogroup"/>
                </x-jet-nav-link>
            </div>






            <!--Step4 List Campanas-->
            <div class="flex md:flex-row flex-col bg-emerald-400 justify-center md:text-left text-center">
                <div class="flex flex-col justify-center items-center relative">
                    <div class="w-56 h-12 md:flex hidden justify-center">
                        <div class="h-full border-r-4 border-emerald-300 border-dashed"></div>
                    </div>
                    <div class="rounded-full w-12 h-12 text-2xl text-emerald-100 bg-emerald-700 font-black flex justify-center items-center absolute top-0 right-0 mt-16 shadow-lg mr-2">4</div>
                    <img src="https://img.icons8.com/clouds/250/000000/open-envelope.png" class="transform hover:translate-y-6 hover:translate-x-5 hover:scale-150 transition
                    duration-300 w-56 h-56 rounded-full shadow my-5 object-scale-down" alt="step3"/>
                    <div class="w-56 h-12 md:flex hidden justify-center">
                        <div class="h-full border-r-4 border-emerald-300 border-dashed"></div>
                    </div>
                </div>
                <div class="ml-5 p-10 flex flex-col justify-center max-w-2xl rounded bg-emerald-400">
                    <div class="md:text-3xl uppercase text-xl font-extrabold text-emerald-700">Paso 4</div>
                    <div class="md:text-3xl uppercase text-xl font-extrabold text-gray-800">Ver Campañas Creadas</div>
                    <div class="mt-4 text-emerald-800 font-bold text-lg text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis, voluptates error alias dolorem praesentium sit soluta iure incidunt labore explicabo eaque, quia architecto veritatis dolores, enim consequatur nihil ipsum.</div>
                </div>
                <x-jet-nav-link href="{{ route('showcampanas') }}" :active="request()->routeIs('showcampanas')">
                    <img src="https://img.icons8.com/nolan/70/filled-sent.png" role="button"
                        class="img-responsive w-20 h-20 rounded-full shadow-lg my-5 object-scale-down
                        transform hover:object-scale-down  hover:rotate-90  hover:translate-y-5 hover:scale-150 transition duration-300 shadow-gray-500" alt="gotogroup"/>
                    </x-jet-nav-link>
                </div>

        </div>

    <!--End Steps-->

    <br><br><br>
    @include('livewire.componentes.footer')


</x-app-layout>
