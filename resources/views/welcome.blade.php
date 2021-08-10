<x-app-layout>


    <main x-data="{ open: false }" class="dark:bg-gray-800 font-mono bg-white relative overflow-hidden h-full">
        <div class="hidden md:block absolute -bottom-32 -left-32 w-96 h-96">
            <div class="absolute text-extrabold text-xl right-12 z-20 text-start top-1/4">
                <span class="text-7xl">
                    🎨
                </span>
                <p>
                    Got a project ?
                </p>
                <a href="#" class="underline">
                    Let&#x27;s talk
                </a>
            </div>
            <svg viewBox="0 0 200 200" class="absolute w-full h-full" xmlns="http://www.w3.org/2000/svg">
                <path fill="#FFDBB9"
                    d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,88.5,-0.9C87,14.6,81.4,29.2,74.1,43.2C66.7,57.2,57.6,70.6,45,78.1C32.4,85.6,16.2,87.1,0.7,85.9C-14.8,84.7,-29.6,80.9,-43.9,74.4C-58.3,67.9,-72,58.7,-79.8,45.9C-87.7,33,-89.5,16.5,-88.9,0.3C-88.4,-15.9,-85.4,-31.7,-78.1,-45.4C-70.8,-59.1,-59.1,-70.6,-45.3,-77.9C-31.6,-85.3,-15.8,-88.5,-0.3,-88.1C15.3,-87.6,30.5,-83.5,44.7,-76.4Z"
                    transform="translate(100 100)">
                </path>
            </svg>
        </div>
        <header class="h-24 sm:h-32 flex items-center z-30 w-full">
            <div class="container mx-auto px-6 flex items-center justify-between">
                <div class="uppercase text-gray-800 dark:text-white font-black text-3xl flex items-center">
                    <svg width="25" height="25" viewBox="0 0 1792 1792" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M1664 1504v-768q-32 36-69 66-268 206-426 338-51 43-83 67t-86.5 48.5-102.5 24.5h-2q-48 0-102.5-24.5t-86.5-48.5-83-67q-158-132-426-338-37-30-69-66v768q0 13 9.5 22.5t22.5 9.5h1472q13 0 22.5-9.5t9.5-22.5zm0-1051v-24.5l-.5-13-3-12.5-5.5-9-9-7.5-14-2.5h-1472q-13 0-22.5 9.5t-9.5 22.5q0 168 147 284 193 152 401 317 6 5 35 29.5t46 37.5 44.5 31.5 50.5 27.5 43 9h2q20 0 43-9t50.5-27.5 44.5-31.5 46-37.5 35-29.5q208-165 401-317 54-43 100.5-115.5t46.5-131.5zm128-37v1088q0 66-47 113t-113 47h-1472q-66 0-113-47t-47-113v-1088q0-66 47-113t113-47h1472q66 0 113 47t47 113z">
                        </path>
                    </svg>
                    <span class="text-xs ml-3 mt-1">
                        Arbmanx@Gmail.COM
                    </span>
                </div>
                <div class="flex items-center">
                    <nav class="font-sen text-gray-800 dark:text-white uppercase text-lg lg:flex items-center hidden">
                        <a href="#" class="py-2 px-6 flex hover:text-black">
                            Works
                        </a>
                        <a href="#" class="py-2 px-6 flex hover:text-black">
                            Resume
                        </a>
                        <a href="#" class="py-2 px-6 flex hover:text-black">
                            Services
                        </a>
                        <a href="#" class="py-2 px-6 flex hover:text-black">
                            Contact
                        </a>
                    </nav>
                    <button class="lg:hidden flex flex-col ml-4">
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                        <span class="w-6 h-1 bg-gray-800 dark:bg-white mb-1">
                        </span>
                    </button>
                </div>
            </div>
        </header>
        <div class="flex relative items-center">
            <div class="container mx-auto px-6 flex flex-col justify-between items-center relative py-4">
                <div class="flex flex-col">
                    {{-- <img src="/images/person/11.webp" class="rounded-full w-28 mx-auto" />
                    <p class="text-3xl my-6 text-center dark:text-white">
                        Hi, I&#x27;m Arbman 🤘
                    </p>
                    <h2
                        class="max-w-3xl text-5xl md:text-6xl font-bold mx-auto dark:text-white text-gray-800 text-center py-2">
                        Building digital products, brands, and experiences.
                    </h2> --}}
                    <div class="flex items-center justify-center mt-4">
                        <button @click="open = true"
                            class="uppercase py-2 my-2 px-4 md:mt-16 bg-transparent bg-lime-700 text-amber-400 border-2 border-gray-800  dark:text-white hover:bg-gray-800 hover:text-white text-md">
                            Click Here Tree Assessment
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div @keydown.window.escape="open = false" {{-- x-init="$watch(&quot;open&quot;, o => !o &amp;&amp; window.setTimeout(() => (open = true), 1000))" --}} x-show="open"
            class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" x-ref="dialog" aria-modal="true"
            style="display: none">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

                <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    x-description="Background overlay, show/hide based on modal state."
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="open = false"
                    aria-hidden="true"></div>


                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

                <div x-show="open" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-description="Modal panel, show/hide based on modal state."
                    class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6">
                    <div>
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100">
                            <svg class="h-6 w-6 text-green-600" x-description="Heroicon name: outline/check"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-5">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Tree Hazard Assessment
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Click below to either start a new assessment or to continue a previous assessment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                        <a href="{{ route('assessment-form') }}"
                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:col-start-2 sm:text-sm">
                            Continue An Assessment
                        </a>
                        <a href="{{ route('start-assessment') }}"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">
                            Start New Assessment
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app-layout>
