{{-- // TODOs //
// MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
future to provide information for every option in every section of every category
// COMPONENTS: Extract into compontents using the atomic design pattern
// REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
<div>
    <form wire:submit.prevent="addSelectedValuesToAssessment">
        {{-- HEADER --}}
        <div class="text-center mt-4 w-full pt-4 text-amber-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto text-5xl font-extrabold">
                {{ $categoryTitle }}
            </h2>
        </div>
        {{-- FORM LAYOUT --}}
        <x-forms.form-layout>
            {{-- FORM GROUP --}}
            <x-forms.form-group>
                <x-slot name="title">{{ $sectionTitle }}</x-slot>
                @foreach ($formValues as $input)
                    <div class="col-span-2 my-1">
                        <input
                            wire:model="selectedValue.{{ $inputType === 'checkbox' ? $input['section'] . $input['id'] : $input['section'] }}"
                            name="{{ $input['section'] }}" type="{{ $inputType }}" value="{{ $input['id'] }}"
                            class="form-radio text-emerald-500" />
                        <label for="{{ $input['section'] }}" class="ml-2">{{ ucwords($input['value']) }}</label>
                    </div>
                @endforeach
            </x-forms.form-group>
            {{-- BUTTON GROUP --}}
            <div class="flex items-center justify-between p-2 m-2 md:p-4 md:m-4">
                @if ($currentSection > 0)
                    <button wire:click="goBack" type="button"
                        class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                        back
                    </button>
                @else
                    <div></div>
                @endif
                <button type="button"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    review
                </button>
                <button type="submit"
                    class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                    save
                </button>
                @if ($currentSection < $sectionCount)
                    <button wire:click="goForward" type="button"
                        class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                        Next
                    </button>
                @endif
            </div>
        </x-forms.form-layout>
    </form>
</div>
