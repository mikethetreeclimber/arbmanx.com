{{-- // TODOs //
    // MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
    future to provide information for every option in every section of every category
    // COMPONENTS: Extract into compontents using the atomic design pattern
    // REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
<x-cards.scrolling-card>
    <x-slot name="header">
        <x-navs.content-header postion="top">
            <x-slot name="title">
                {{ ucwords(preg_replace('[_]', ' ', $currentCategory)) }}
            </x-slot>
        </x-navs.content-header>
    </x-slot>
    <div x-data="{ show: false, message: '' }"
        x-on:saved.window="show = true; message = $event.detail; setTimeout(() => {show = false}, 2500)">
        <div aria-live="assertive" class="inset-0">
            <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
                <!-- Notification panel, dynamically insert this into the live region when it needs to be displayed -->

                <div x-show="show" x-transition:enter="transform ease-out duration-300 transition"
                    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                    x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-green-400" x-description="Heroicon name: outline/check-circle"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
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
        {{-- @if (session()->has('success'))
            <div class="p-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-green-400" x-description="Heroicon name: outline/check-circle"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3 w-0 flex-1 pt-0.5">
                        <p class="text-sm font-medium text-gray-900">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div class="ml-4 flex-shrink-0 flex">
                        <button @click="saved = false; "
                            class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span class="sr-only">Close</span>
                            <svg class="h-5 w-5" x-description="Heroicon name: solid/x"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        @endif --}}
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
                <p class="text-xl font-medium text-gray-900">{{ ucwords(preg_replace('[-]', ' ', $sectionTitle)) }}
                </p>
                <p class="text-md text-gray-500">Sub Heading Goes Here</p>
            </legend>
            <div class="col-span-4">
                <div class="relative bg-white rounded-md space-y-1">
                    @foreach ($sectionInputs as $input)
                        @if ($inputType == 'button')
                            <label
                                class="border-gray-200 rounded-md shadow-md hover:shadow-sm relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                <div class="flex items-center text-sm">
                                    <button type="button" wire:click="setToggleVariable({{ $input['id'] }})"
                                        class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 bg-gray-200"
                                        x-data="{ on: false }" role="switch" aria-checked="false"
                                        :aria-checked="on.toString()" @click="on = !on" x-state:on="Enabled"
                                        x-state:off="Not Enabled"
                                        :class="{ 'bg-indigo-600': on, 'bg-gray-200': !(on) }">
                                        <span class="sr-only">Use setting</span>
                                        <span
                                            class="pointer-events-none relative inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-0"
                                            x-state:on="Enabled" x-state:off="Not Enabled"
                                            :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }">
                                            <span
                                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-100 ease-in duration-200"
                                                aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled"
                                                :class="{ 'opacity-0 ease-out duration-100': on, 'opacity-100 ease-in duration-200': !(on) }">
                                                <svg class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 12 12">
                                                    <path d="M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span
                                                class="absolute inset-0 h-full w-full flex items-center justify-center transition-opacity opacity-0 ease-out duration-100"
                                                aria-hidden="true" x-state:on="Enabled" x-state:off="Not Enabled"
                                                :class="{ 'opacity-100 ease-in duration-200': on, 'opacity-0 ease-out duration-100': !(on) }">
                                                <svg class="h-3 w-3 text-indigo-600" fill="currentColor"
                                                    viewBox="0 0 12 12">
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
                            <!-- Checked: "", Not Checked: "" -->
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
                                    <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
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
            {{-- <button type="button"
                            class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                            review
                        </button> --}}
            @if ($sectionIndex === $sectionsCount)
                <x-btns.primary-btn wire:click="addSelectedValuesToAssessment" type="button">
                    save
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
