<x-app-layout>
    <x-slot name="header" class="shadow-2xl">
        <h2 class="text-4xl lg:text-4xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">
            MAILING CICSTEP
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden rounded-full  shadow-xl sm:rounded-md">
               <br>
                    <div class="swiper mySwiper rounded-xl sm:rounded-lg shadow-2xl shadow-gray-700 px-3 py-3  max-w-screen-lg sm:w-auto">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img
                            class="object-cover w-full h-96"
                            src="/images/imagen1.jpg"
                            alt="apple watch photo"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                            class="object-cover w-full h-96"
                            src="/images/imagen2.jpg"
                            alt="apple watch photo"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                            class="object-cover w-full h-96"
                            src="/images/imagen3.jpg"
                            alt="apple watch photo"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                            class="object-cover w-full h-96"
                            src="/images/imagen4.jpg"
                            alt="apple watch photo"
                            />
                        </div>
                        <div class="swiper-slide">
                            <img
                            class="object-cover w-full h-96"
                            src="/images/imagen5.jpg"
                            alt="apple watch photo"
                            />
                        </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                <br>


                <!--Presentacion-->
                <section class="py-20 bg-white my-20">
                    <div class="grid grid-cols-1 sm:grid-cols-2  gap-10 mx-auto  items-center max-w-6xl mx-auto">
                    <div class="px-4 md:mr-6">
                        <h2 class="text-4xl pr-6 sm:leading-snug tracking-tight font-bold text-black">
                        ¿QUE ES MAILING CICSTEP?
                        </h2>
                        <p class="mt-4 text-stone-800 text-xl font-medium">
                        Ingresar mensaje de que es.
                        </p>
                    </div>
                    <div>
                        <div class="absolute bg-blue-500 transform -translate-x-10 relative h-64">
                        </div>
                        <div class="transform md:rounded-md  bg-white rotate-3 scale-110 translate-x-10 md:shadow-2xl md:shadow-gray-700 -ml-4 -mt-44 p-12  space-y-2">
                        <div class="px-4 sm:px-0 grid grid-cols-5 sm:grid-cols-4 gap-2 sm:gap-8 max-w-5xl mx-auto">
                                <img src="https://img.icons8.com/fluency/150/000000/group-task.png" class="img-responsive" alt="Grupos"/>
                                <img src="https://img.icons8.com/fluency/150/000000/contacts.png" class="img-responsive" alt="Contactos"/>
                                <img src="https://img.icons8.com/fluency/150/000000/laptop-e-mail.png"/>
                                <img src="https://img.icons8.com/clouds/150/000000/commercial.png" class="img-responsive" alt="Campañas"/>
                                <img src="https://img.icons8.com/color/150/000000/property-time.png" class="img-responsive" alt="Calendario"/>
                                <img src="https://img.icons8.com/stickers/150/000000/combo-chart.png"/>
                                <img src="https://img.icons8.com/plasticine/150/000000/address-book--v1.png"/>
                                <img src="https://img.icons8.com/color/150/000000/message-squared.png"/>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>


                <!--Aspectradio video General-->
                <div class="px-5 max-w-screen-xl sm:w-auto">
                <div class="aspect-w-16 aspect-h-9 ">
                    <iframe src="/images/Indila.mp4" class="rounded-xl shadow-2xl shadow-gray-600" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div></div>


                <!--Guia paso a paso-->

                <div class="pb-16" style="font-family: 'Lato', sans-serif">
                    <!-- Code block starts -->
                    <dh-component>
                        <section class="max-w-8xl mx-auto container bg-white pt-16">
                            <div>
                                <div role="contentinfo" class="flex items-center flex-col px-4">
                                    <img src="https://img.icons8.com/color/60/000000/man-in-a-hole.png" class="img-responsive animate-bounce"/>
                                    <p tabindex="0" class="focus:outline-none uppercase text-xl hover:text-cyan-500 text-center text-amber-500 leading-4 font-mono">¿Eres nuevo en la plataforma? Sigue estos pasos:</p><br>

                                    <h1 tabindex="0" class="focus:outline-none text-4xl lg:text-4xl font-extrabold text-center leading-10 text-gray-800  pt-4">GUÍA PRÁCTICA DE  <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-800">MAILING cictep</p></h1>
                                    <img src="https://img.icons8.com/color/60/000000/wakeup-hill-on-stairs.png" class="img-responsive animate-pulse "/>
                                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto text-center">
                                        En este apartado podra visualizar una guia practica de instrucción que le permitira navegar e interactuar con la plataforma. Siga en orden los siguientes pasos para crear las campañas.
                                       </p>
                                    <p class="mt-4 max-w-2xl text-xl text-gray-600 lg:mx-auto font-extrabold text-center ">Continuemos con tu nueva Campaña:
                                        <x-jet-nav-link href="{{ route('grupos') }}" :active="request()->routeIs('grupos')" >

                                            <button class="bg-gradient-to-r
                                            from-green-400 to-blue-500 hover:from-indigo-500 hover:to-purple-500
                                            text-white  text-lg sm:text-base text-right font-bold
                                            py-3 px-4 rounded-2xl shadow-2xl shadow-cyan-500/50  outline-none focus:ring-4
                                            transform active:scale-x-75 transition-transform mx-5 flex">
                                            <img src="https://img.icons8.com/cotton/48/000000/commercial--v1.png" class="img-responsive animate-bounce"/>
                                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                                <span class="ml-4 mt-3">NUEVA CAMPAÑA</span>

                                            </button>

                                        </x-jet-nav-link>
                                    </p>


                                </div>
                                <!--Grupos-->

                                <div tabindex="0" aria-label="group of cards" class="focus:outline-none mt-20 flex flex-wrap justify-center gap-10 px-4">
                                    <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                        <x-jet-nav-link href="{{ route('grupos') }}" :active="request()->routeIs('grupos')">
                                            <div class="w-20 h-20 relative mr-5 object-scale-down
                                            transform hover:object-scale-down  hover:rotate-360  hover:translate-y-5 hover:scale-150 transition duration-300">
                                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                                <div class="shadow-2xl shadow-indigo-500  absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                                      </svg>

                                                </div>
                                            </div>
                                        </x-jet-nav-link>
                                        <div class="w-10/12">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-gray-800">

                                                <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-red-600"><span class="animate-ping relative inline-flex rounded-full h-3 w-3 bg-indigo-700"></span>
                                                    Paso 1:
                                                </p>
                                                 Agregar Grupos o Etiquetas</h2>
                                            <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2 indent-8">It provides a very simple start, no need to write a lot of code, you just import it and start the primitive components and create the ones you need.</p>
                                        </div>
                                    </div>

                                    <!--Contactos-->
                                    <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                        <x-jet-nav-link href="{{ route('contactos') }}" :active="request()->routeIs('contactos')">
                                            <div class="w-20 h-20 relative mr-5 object-scale-down
                                            transform hover:object-scale-down  hover:rotate-360  hover:translate-y-5 hover:scale-150 transition duration-300">
                                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                                <div class="shadow-2xl shadow-indigo-500 absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </div>
                                            </div>
                                    </x-jet-nav-link>
                                        <div class="w-10/12">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">
                                                <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-red-600"><span class="animate-ping relative inline-flex rounded-full h-3 w-3 bg-indigo-700"></span>
                                                    Paso 2:</p> Agregar Contactos</h2>
                                            <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2 indent-8">Modify the visual appearance of your site – including colors, fonts, margins and other style-related properties – with a sophisticated style.</p>
                                        </div>
                                    </div>
                                    <!--Campañas-->
                                    <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                        <x-jet-nav-link href="{{ route('campanas') }}" :active="request()->routeIs('campanas')" >
                                            <div class="w-20 h-20 relative mr-5 object-scale-down
                                            transform hover:object-scale-down  hover:rotate-360  hover:translate-y-5 hover:scale-150 transition duration-300">
                                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                                <div class="shadow-2xl shadow-indigo-500 absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-11 w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </x-jet-nav-link>
                                        <div class="w-10/12">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">
                                                <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-red-600"><span class="animate-ping relative inline-flex rounded-full h-3 w-3 bg-indigo-700"></span>
                                                    Paso 3:</p> Crear Campañas</h2>
                                            <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2 indent-8">Instead of just giving you the tools to create your own site, they offer you a list of themes you can choose from. Thus a handy product.</p>
                                        </div>
                                    </div>
                                    <!--Calendario-->
                                    <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-5/12 pb-20">
                                        <x-jet-nav-link href="{{ route('calendario') }}" :active="request()->routeIs('calendario')">
                                            <div class="w-20 h-20 relative mr-5 object-scale-down
                                            transform hover:object-scale-down  hover:rotate-360  hover:translate-y-5 hover:scale-150 transition duration-300">
                                                <div class="absolute top-0 right-0 bg-indigo-100 rounded w-16 h-16 mt-2 mr-1"></div>
                                                <div class="shadow-2xl shadow-indigo-500 absolute text-white bottom-0 left-0 bg-indigo-700 rounded w-16 h-16 flex items-center justify-center mt-2 mr-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </x-jet-nav-link>
                                        <div class="w-10/12">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold leading-tight text-gray-800">
                                                <p class="uppercase bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-red-600"><span class="animate-ping relative inline-flex rounded-full h-3 w-3 bg-indigo-700"></span>
                                                    Paso 4:</p>Calendario - Programar envio de Campañas</h2>
                                            <p tabindex="0" class="focus:outline-none text-base text-gray-600 leading-normal pt-2 indent-8">We have chosen the bright color palettes that arouse the only positive emotions. The kit that simply assures to be loved by everyone.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </dh-component>

                </div>

            </div>
        </div>
    </div>
    <br><br><br>
    @include('livewire.componentes.footer')
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
</x-app-layout>
