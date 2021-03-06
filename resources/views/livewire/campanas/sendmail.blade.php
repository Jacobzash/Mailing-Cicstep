<div x-show="open"
                class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                x-transition:enter="transition duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            >
                <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
                <div
                    class="relative bg-white shadow-lg rounded-lg text-gray-900 z-20"
                    @click.away="open = false"
                    x-show="open"
                    x-transition:enter="transition transform duration-300"
                    x-transition:enter-start="scale-0"
                    x-transition:enter-end="scale-100"
                    x-transition:leave="transition transform duration-300"
                    x-transition:leave-start="scale-100"
                    x-transition:leave-end="scale-0"
                >
                    <header class="flex flex-col justify-center items-center p-3 text-green-600">
                    <div class="flex justify-center w-28 h-28 border-4 border-green-600 rounded-full mb-4">
                        <svg class="fill-current w-20" viewBox="0 0 20 20">
                        <path
                            d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"
                        ></path>
                        </svg>
                    </div>
                    <h2 class="font-semibold text-2xl">Success</h2>
                    </header>
                    <main class="p-3 text-center">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam voluptatem, optio dolorem accusantium fuga
                        molestias nobis sequi autem ducimus laudantium beatae amet earum, quia reiciendis corporis animi modi
                        pariatur impedit!
                    </p>
                    </main>
                    <footer class="flex justify-center bg-transparent">
                    <button
                        class="bg-green-600 font-semibold text-white py-3 w-full rounded-b-md hover:bg-green-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
                        @click="open = false"
                    >
                        Confirm
                    </button>
                    </footer>
                </div>
                </div>
