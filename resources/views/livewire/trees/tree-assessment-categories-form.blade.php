{{-- // TODOs //
    // MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
    future to provide information for every option in every section of every category
    // COMPONENTS: Extract into compontents using the atomic design pattern
    // REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
<x-app-layout>
    <div>
        @livewire('trees.review-assessment', ['assessment' => $assessment])
    </div>
    <div class="flex-1 relative z-0 flex overflow-hidden">
        <main class="relative  flex-1 z-0 overflow-auto focus:outline-none">
            <div class="bg-white absolute inset-0 mx-2 my-2 md:my-6 border border-accent rounded-lg">
                <section class="h-full">
                    <x-cards.scrolling-card>
                        <x-slot name="header">
                            <x-navs.content-header postion="top">
                                <x-slot name="title">
                                    {{ ucwords(preg_replace('[_]', ' ', $currentCategory)) }}
                                </x-slot>
                            </x-navs.content-header>
                        </x-slot>
                        {{-- //TODO extract to component --}}
                        <div x-data="{ show: false, message: '' }"
                            x-on:saved.window="show = true; message = $event.detail; setTimeout(() => {show = false}, 2500)">
                            <div aria-live="assertive" class="inset-0">
                                <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                                    <!-- Notification panel, dynamically insert this into the live region when it needs to be displayed -->

                                    <div x-show="show" x-transition:enter="transform ease-out duration-300 transition"
                                        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                                        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                        class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                                        <div class="p-4">
                                            <div class="flex items-start">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-6 w-6 text-green-400"
                                                        x-description="Heroicon name: outline/check-circle"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                    </svg>
                                                </div>
                                                <div class="ml-3 w-0 flex-1 pt-0.5">
                                                    <p x-text="message" class="text-sm font-medium text-gray-900"></p>
                                                </div>
                                                <div class="ml-4 flex-shrink-0 flex">
                                                    <button @click="show = false;"
                                                        class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="h-5 w-5" x-description="Heroicon name: solid/x"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                            fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div>
                            @if (session()->has('error'))
                                <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
                                    <p class="font-bold">
                                        {{ session('error') }}
                                    </p>
                                </div>
                            @endif
                        </div>
                        <section class="my-1">
                            <article class="mt-4 grid grid-cols-6">
                                <legend class="ml-4 col-span-2">
                                    <p class="text-xl font-medium text-gray-900">
                                        {{-- //TODO class to sanitze --}}
                                        {{ ucwords(preg_replace('[-]', ' ', $sectionTitle)) }}
                                    </p>
                                    <p class="text-md text-gray-500">Sub Heading Goes Here</p>
                                </legend>
                                <div class="col-span-4">
                                    <div class="relative bg-white rounded-md space-y-1">
                                        @foreach ($sectionInputs as $input)
                                            @if ($inputType == 'button')
                                                {{-- //TODO extract to components --}}
                                                <label
                                                    class="border-gray-200 rounded-md shadow-md hover:shadow-sm relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                                    <div class="flex items-center text-sm">
                                                        <button type="button"
                                                            wire:click="setToggleVariable({{ $input['id'] }})"
                                                            id="{{ $input['section'] }}"
                                                            class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-gray-200"
                                                            x-data="{ on: false }" role="switch" aria-checked="false"
                                                            :aria-checked="on.toString()" @click="on = !on"
                                                            x-state:on="Enabled" x-state:off="Not Enabled"
                                                            :class="{ 'bg-indigo-600': on, 'bg-gray-200': !(on) }">
                                                            <span class="sr-only">Use setting</span>
                                                            <span
                                                                class="pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0"
                                                                x-state:on="Enabled" x-state:off="Not Enabled"
                                                                :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }">
                                                                <span
                                                                    class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                                    aria-hidden="true" x-state:on="Enabled"
                                                                    x-state:off="Not Enabled"
                                                                    :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !(on) }">
                                                                    <svg class="h-3 w-3 text-gray-400" fill="none"
                                                                        viewBox="0 0 12 12">
                                                                        <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                                <span
                                                                    class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                                    aria-hidden="true" x-state:on="Enabled"
                                                                    x-state:off="Not Enabled"
                                                                    :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !(on) }">
                                                                    <svg class="h-3 w-3 text-indigo-600"
                                                                        fill="currentColor" viewBox="0 0 12 12">
                                                                        <path
                                                                            d="M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </button>
                                                        <div class="grid grid-cols-2 md:grid-cols-1">
                                                            <span class="text-gray-900 ml-3 font-bold">
                                                                {{ ucwords($input['value']) }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </label>
                                            @else
                                                <label
                                                    class="border-gray-200 hover:border-indigo-200 hover:scale-50 rounded-md shadow-sm hover:shadow-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                                    <div class="flex items-center text-sm">
                                                        <input
                                                            wire:model="selectedValues.{{ $inputType == 'checkbox' ? $input['section'] . $input['id'] : $input['section'] }}"
                                                            name="{{ $input['section'] }}" type="{{ $inputType }}"
                                                            value="{{ $input['id'] }}"
                                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                                            aria-labelledby="pricing-plans-0-label"
                                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                                        <div class="grid grid-cols-2 md:grid-cols-1">
                                                            <span
                                                                class="text-gray-900 ml-3 font-bold">{{ ucwords($input['value']) }}</span>
                                                        </div>
                                                    </div>
                                                </label>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </article>
                        </section>
                        <x-slot name="footer">
                            <div class="flex items-center justify-between p-2 m-2">
                                @if ($sectionIndex > 0)

                                    <x-btns.primary-btn wire:click="goToPreviousSection" type="button">
                                        back
                                    </x-btns.primary-btn>
                                @else
                                    <div></div>
                                @endif
                                <div>
                                    @if ($categoryIndex >= 1)
                                        <x-btns.primary-btn wire:click="showModal">
                                            review
                                        </x-btns.primary-btn>

                                    @endif
                                </div>
                                @if ($sectionIndex === $sectionsCount)
                                    <x-btns.primary-btn wire:click="addSelectedValuesToAssessment" type="button">
                                        Save Category
                                    </x-btns.primary-btn>
                                @endif
                                @if ($sectionIndex < $sectionsCount)
                                    <x-btns.primary-btn wire:click="goToNextSection" type="button">
                                        Next
                                    </x-btns.primary-btn>
                                @endif
                            </div>
                        </x-slot>
                    </x-cards.scrolling-card>
                </section>
            </div>
        </main>
        <aside class="hidden relative  z-0 lg:block " style="width: 33%">
            <div class="bg-white absolute inset-0 mx-2 my-2 md:my-6 border border-accent rounded-lg">
                <x-cards.scrolling-card>
                    <x-slot name="header">
                        <x-navs.content-header postion="top">
                            <x-slot name="title">
                                !!
                            </x-slot>
                            <x-slot name="trigger">
                                <x-btns.dot-btn />
                            </x-slot>
                            <x-navs.nav-link>
                                Go Back to start
                            </x-navs.nav-link>
                            <x-navs.nav-link>
                                Save Progress
                            </x-navs.nav-link>
                            <x-navs.nav-link>
                                Review
                            </x-navs.nav-link>
                            <x-navs.nav-link>
                                Quit
                            </x-navs.nav-link>
                        </x-navs.content-header>
                    </x-slot>
                    <div class="space-y-6 rounded-xl">
                        <div>
                            <div class="col-span-3">
                                <label class="block text-sm font-medium text-gray-700">
                                    Add photos of the tree being assessed.
                                </label>
                                <div
                                    class="mt-1 border-2 border-gray-300 border-dashed rounded-md px-6 pt-5 pb-6 flex justify-center">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                            viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload"
                                                class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
                                        alt="" class="object-cover">
                                </div>
                                <div class="mt-4 flex items-start justify-between">
                                    <div>
                                        <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                                            </span>IMG_4985.HEIC</h2>
                                        <p class="text-sm font-medium text-gray-500">3.9 MB</p>
                                    </div>
                                    <button type="button"
                                        class="ml-4 h-8 w-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <!-- Heroicon name: outline/heart -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                        </svg>
                                        <span class="sr-only">Favorite</span>
                                    </button>
                                </div> --}}
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Assessed Tree Details</h3>
                            <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Common Name</dt>
                                    <dd class="text-gray-900" wire:model="treeSpecies">
                                        {{ $treeSpecies->common_name ?? '' }}</dd>
                                </div>
                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Created</dt>
                                    <dd class="text-gray-900">June 8, 2020</dd>
                                </div>
                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Last modified</dt>
                                    <dd class="text-gray-900">June 8, 2020</dd>
                                </div>
                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Dimensions</dt>
                                    <dd class="text-gray-900">4032 x 3024</dd>
                                </div>
                                <div class="py-3 flex justify-between text-sm font-medium">
                                    <dt class="text-gray-500">Resolution</dt>
                                    <dd class="text-gray-900">72 x 72</dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Description</h3>
                            <div class="mt-2 flex items-center justify-between">
                                <p class="text-sm text-gray-500 italic">Add a description to this image.</p>
                                <button type="button"
                                    class="-mr-2 h-8 w-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: solid/pencil -->
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                    </svg>
                                    <span class="sr-only">Add description</span>
                                </button>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900">Shared with</h3>
                            <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                                <li class="py-3 flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=1024&h=1024&q=80"
                                            alt="" class="w-8 h-8 rounded-full">
                                        <p class="ml-4 text-sm font-medium text-gray-900">Aimee Douglas</p>
                                    </div>
                                    <button type="button"
                                        class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                            class="sr-only"> Aimee Douglas</span></button>
                                </li>
                                <li class="py-3 flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=oilqXxSqey&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="" class="w-8 h-8 rounded-full">
                                        <p class="ml-4 text-sm font-medium text-gray-900">Andrea McMillan</p>
                                    </div>
                                    <button type="button"
                                        class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                            class="sr-only"> Andrea McMillan</span></button>
                                </li>
                                <li class="py-2 flex justify-between items-center">
                                    <button type="button"
                                        class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                        <span
                                            class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                                            <!-- Heroicon name: solid/plus -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span
                                            class="ml-4 text-sm font-medium text-indigo-600 group-hover:text-indigo-500">Share</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="flex">
                            <button type="button"
                                class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Download
                            </button>
                            <button type="button"
                                class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Delete
                            </button>
                        </div>
                    </div>
                    <x-slot name="footer">
                        <x-navs.content-header position="bottom" subTitle="Thanks for Visiting">

                            <div class="m-3"> some other link</div>
                        </x-navs.content-header>
                    </x-slot>
                </x-cards.scrolling-card>
            </div>
        </aside>
    </div>
</x-app-layout>
