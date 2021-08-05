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
    <div class="md:grid md:grid-cols-12 md:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <!-- Current: "bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
                <x-navs.responsive-nav-link href="#" active="{{ $currentCategory }}">
                    <span class="inline-flex justify-center items-center pr-2 ml-4 text-green-700">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Tree Details
                    </span>
                </x-navs.responsive-nav-link>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/credit-card -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="truncate">
                        Plan &amp; Billing
                    </span>
                </a>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/user-group -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="truncate">
                        Team
                    </span>
                </a>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/view-grid-add -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    <span class="truncate">
                        Integrations
                    </span>
                </a>
            </nav>
        </aside>
        <div class="col-span-9 my-1">
            <fieldset class="mt-6">
                <legend class="text-base font-medium text-gray-900">
                    {{ ucwords(preg_replace('[-]', ' ', $sectionTitle)) }}
                </legend>
                <p class="text-sm text-gray-500">Sub Heading Goes Here</p>
                <div class="mt-4 space-y-4">
                    <div class="relative bg-white rounded-md -space-y-px">
                        @foreach ($sectionInputs as $input)
                            <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                            <label
                                class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
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
                        @endforeach
                    </div>
                </div>
            </fieldset>
        </div>
    </div>

    <x-slot name="footer">
        <div class="flex items-center justify-between p-2 m-2 md:p-4 md:m-4">
            @if ($sectionIndex > 0)
                <button wire:click="goToPreviousSection" type="button"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    back
                </button>
            @else
                <div></div>
            @endif
            {{-- <button type="button"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    review
                </button> --}}
            @if ($sectionIndex === $sectionsCount)
                <button wire:click="addSelectedValuesToAssessment" type="button"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    save
                </button>
            @endif
            @if ($sectionIndex < $sectionsCount)
                <button wire:click="goToNextSection" type="button"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    Next
                </button>
            @endif
        </div>
    </x-slot>


</x-cards.scrolling-card>
