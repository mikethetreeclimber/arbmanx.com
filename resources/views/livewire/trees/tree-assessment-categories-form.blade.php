{{-- // TODOs //
    // MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
    future to provide information for every option in every section of every category
    // COMPONENTS: Extract into compontents using the atomic design pattern
    // REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
{{-- @dd($formValues) --}}
<x-cards.scrolling-card>
    <x-slot name="header">
        <x-navs.content-header postion="top">
            <x-slot name="title">
                <div class="text-center text-amber-500">
                    <h2 class="max-w-sm mx-auto text-xl font-extrabold">
                        {{ $currentCategory }}
                    </h2>
                </div>
            </x-slot>
        </x-navs.content-header>
    </x-slot>

    {{-- @dd($category) --}}
    {{ $sectionTitle }}
    {{-- @dd($sectionInputs) --}}
    @foreach ($sectionInputs as $input)
        <div class="col-span-2 my-1">
            <input
                wire:model="selectedValues.{{ $inputType == 'checkbox' ? $input['section'] . $input['id'] : $input['section'] }}"
                name="{{ $input['section'] }}" type="{{ $inputType }}" value="{{ $input['id'] }}"
                class="form-radio text-emerald-500" />
            <label for="{{ $input['section'] }}" class="ml-2">{{ ucwords($input['value']) }}</label>
        </div>
    @endforeach
    <x-slot name="footer">
        <div class="flex items-center justify-between p-2 m-2 md:p-4 md:m-4">
            @if ($sectionIndex > 0)
                <button wire:click="goBack" type="button"
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
