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
    <div class="my-1">
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
                                    <span class="text-gray-900 ml-3 font-bold">{{ ucwords($input['value']) }}</span>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>
            </div>
        </fieldset>
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
