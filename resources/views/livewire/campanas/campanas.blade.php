@section('title', __('Campanas'))
<!-- component -->
<div class="w-11/12 md:w-11/12 lg:6/12 mx-auto relative py-20">
    <h1 class="text-4xl text-center font-extrabold text-blue-700">Sigue estos pasos para crear tu campaña</h1>
    <div class="border-l-2 mt-10">





        <!-- Card 1 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-green-400 via-emerald-500 to-green-500 text-white rounded mb-10 flex-col md:flex-row">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-gradient-to-r from-green-400 via-emerald-500 to-green-500 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 -mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-emerald-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">Titulo</h1>
          <h1 class="text-xl font-bold">Asignar el título o denominación de la campaña que vamos a realizar.</h1>
          <h3>Debe ser claro y preciso. Para definirlo se pueden considerar factores como el lugar de destino,
              el producto o servicio a comunicar, el nombre del evento, la característica de la audiencia, etc.</h3>
          <div class="mb-4">
            <label for="phonecontacto" class="after:content-['*'] after:ml-0.5
            after:text-red-500 block font-medium text-sm text-white">TITULO CAMPAÑA</label>
            <div class="relative">
                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                      </svg>
                </div>
                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                    id="phonecontacto" placeholder="Titulo de la Campaña" wire:model="phonecontacto">
                @error('phonecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
        </div>
        </div>

      </div>






      <!-- Card 2 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-teal-500 via-cyan-500 to-sky-400 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-blue-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-blue-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">Para:</h1>
          <h1 class="text-xl font-bold">Seleccionar o elegir el grupo a quien se dirigirá la campaña.</h1>
          <h3>Se debe seleccionar un grupo (base de contactos de nuestra audiencia) que se ha creado
              anteriormente. Si no se tiene un grupo, se puede
              <a href="{{ route('grupos') }}" :active="request()->routeIs('grupos')"
            class="font-extrabold font-sans italic uppercase text-lg text-red-600 underline">

                crear uno aquí.
            </a>
          </h3>
                <div class="mb-4">
                    <label for="gruposid" class="after:content-['*'] after:ml-0.5
                    after:text-red-500 block font-medium text-sm text-white">Grupos</label>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>
                        </div>

                        <select wire:model="gruposid" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                        rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400">
                            <option value="Elegir" disabled>Seleccione Grupo</option>
                            @foreach ($grupos as $grupo)
                                <option value="{{ $grupo->id}}">{{ $grupo->namegrupo }}</option>
                            @endforeach
                        </select>
                        @error('gruposid') <span class="text-red-500">{{ $message }}</span>@enderror
                </div></div>
        </div>

      </div>








      <!-- Card 3 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-pink-500 via-rose-500 to-rose-400 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-pink-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-pink-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">De:</h1>
          <h1 class="text-xl font-bold">Colocar el correo remitente de la campaña.</h1>
          <h3>Se debe especificar quién está enviando la campaña. Se recomienda colocar un correo activo.</h3>
            <div class="mb-4">
                <label for="phonecontacto" class="after:content-['*'] after:ml-0.5
                after:text-red-500 block font-medium text-sm text-white">Remitente</label>
                <div class="relative">
                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                          </svg>
                    </div>
                    <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                    rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                        id="phonecontacto" placeholder="Remitente..." wire:model="phonecontacto">
                    @error('phonecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
            </div>
        </div>

      </div>










      <!-- Card 4 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-green-500 via-emerald-500 to-lime-600 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-green-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-green-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">Asunto:</h1>
          <h1 class="text-xl font-bold">Asignar el título que tendrá nuestro mensaje de correo.</h1>
          <h3>Es importante considerar que este título debe ser atractivo para capturar la atención
              del destinatario y debe incluir en pocos caracteres la idea clave del mensaje a enviar.</h3>
          <div class="mb-4">
            <label for="phonecontacto" class="after:content-['*'] after:ml-0.5
            after:text-red-500 block font-medium text-sm text-white">Asunto Campaña</label>
            <div class="relative">
                <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                      </svg>
                </div>
                <input type="text" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4
                rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400"
                    id="phonecontacto" placeholder="Asunto..." wire:model="phonecontacto">
                @error('phonecontacto') <span class="text-red-500">{{ $message }}</span>@enderror
            </div>
        </div>
        </div>

      </div>









      <!-- Card 5 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-violet-500 via-purple-500 to-indigo-500 text-white rounded mb-10 flex-col md:flex-row space-y-4 md:space-y-0">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-purple-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-purple-300 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">Contenido:</h1>
          <h1 class="text-xl font-bold">Elaborar el contenido del correo de la campaña.</h1>
          <h3>
            Elegir la plantilla del cuerpo del correo, redactar el mensaje, agregarle una
            imagen de ser necesario, personalizar el estilo del correo, añadir un botón de
            llamado a la acción y la información institucional de la empresa o la marca.
          </h3>
        </div>
        <button
            class="flex px-4 py-2
            bg-gradient-to-r from-pink-400 via-pink-500 to-pink-400
            text-white  text-sm sm:text-base text-right font-bold rounded-2xl shadow-xl outline-none
            focus:ring-4 transform active:scale-x-75 transition-transform mx-5">

            <span class="ml-4 uppercase">diseñar</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
              </svg>
            </button>
      </div>








      <!-- Card 6 -->
      <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-6 py-4 bg-gradient-to-r from-red-500 via-rose-500 to-red-500 text-white rounded mb-10 flex-col md:flex-row">
        <!-- Dot Follwing the Left Vertical Line -->
        <div class="w-5 h-5 bg-red-600 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 -mt-2 md:mt-0"></div>

        <!-- Line that connecting the box with the vertical line -->
        <div class="w-10 h-1 bg-red-400 absolute -left-10 z-0"></div>

        <!-- Content that showing in the box -->
        <div class="flex-auto">
          <h1 class="text-xl font-bold uppercase">enviar:</h1>
          <h1 class="text-xl font-bold">Remitir el mensaje a los destinatarios elegidos.</h1>
          <h3>
            Cuando el correo de la campaña esté listo se podrá enviar un correo de prueba al
            mail que el remitente escoja. De ser exitosa la prueba se podrá ENVIAR finalmente
             la campaña a los destinatarios elegidos de manera definitiva.
          </h3>
        </div>
            <button
                class="bg-gradient-to-r
                from-cyan-500 to-blue-500 hover:from-lime-500 hover:to-emerald-500
                text-white text-lg font-bold py-2 px-4 rounded-xl shadow-xl  uppercase tracking-widest
                outline-none focus:ring-4
                transform active:scale-x-75 transition-transform mx-5 flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-7a2 2 0 012-2h2m3-4H9a2 2 0 00-2 2v7a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-1m-1 4l-3 3m0 0l-3-3m3 3V3" />
                  </svg>
                <span class="ml-4">Programar Envio</span>
            </button>
            <button  type="button"
                class="bg-gradient-to-r from-pink-700 to-fuchsia-700
                hover:from-lime-500 hover:to-emerald-500  text-white
                    text-lg font-bold py-2 px-4 rounded-xl shadow-xl  uppercase tracking-widest
                    outline-none focus:ring-4
                transform active:scale-x-75 transition-transform mx-5 flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>
                    <span class="ml-4">ENVIAR</span>

            </button>



      </div>



    </div>
  </div>
