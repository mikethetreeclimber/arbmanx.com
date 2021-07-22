{{-- // TODOs //
// MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
future to provide information for every option in every section of every category
// COMPONENTS: Extract into compontents using the atomic design pattern
// REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
<div>
    <form wire:submit.prevent="add{{ ucwords($category) }}">

        {{-- HEADER --}}
        <div class="text-center mt-4 w-full pt-4 text-amber-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto text-5xl font-extrabold">
                {{ ucwords($category) }}
            </h2>
        </div>

        {{-- FORM LAYOUT --}}
        <x-forms.form-layout>

            {{-- FORM GROUP --}}
            <x-forms.form-group>

                <x-slot name="title">{{ ucwords($sections[$currentSection]) }}</x-slot>

                <div>
                    @if ($currentSection === 0)
                        @foreach ($treeForms as $key => $form)
                            <div class="col-span-2 my-1">
                                <input wire:model.lazy="form" name="{{ $form->section }}" type="radio"
                                    value="{{ $form->id }}" id="option{{ $key }}"
                                    class="form-radio text-emerald-500" />
                                <label for="option{{ $key }}" class="ml-2">{{ $form->value }}</label>
                            </div>
                        @endforeach
                    @endif
                    @if ($currentSection === 1)
                        @foreach ($treeCrownClasses as $key => $crownClass)
                            <div class="col-span-2 my-1">
                                <input type="radio" wire:model.lazy="crownClass" value="{{ $crownClass->id }}"
                                    name="{{ $crownClass->section }}" id="option{{ $key }}"
                                    class="form-radio text-emerald-500" />
                                <label for="option{{ $key }}" class="ml-2">{{ $crownClass->value }}</label>
                            </div>
                        @endforeach
                    @endif
                    @if ($currentSection === 2)
                        @foreach ($treeAgeClasses as $key => $ageClass)
                            <div class="col-span-2 my-1">
                                <input type="radio" wire:model.lazy="ageClass" value="{{ $ageClass->id }}"
                                    name="{{ $ageClass->section }}" id="option{{ $key }}"
                                    class="form-radio text-emerald-500" />
                                <label for="option{{ $key }}" class="ml-2">{{ $ageClass->value }}</label>
                            </div>
                        @endforeach
                    @endif
                    @if ($currentSection === 3)
                        @foreach ($treeSpecialValues as $specialValue)
                            <div class="col-span-2 my-1">
                                <input type="checkbox" wire:model.lazy="specialValues"
                                    value="{{ $specialValue->id }}"
                                    name="{{ $specialValue->section }}{{ $specialValue->id }}"
                                    id="option{{ $specialValue->id }}" class="form-radio text-emerald-500" />
                                <label for="option{{ $specialValue->id }}"
                                    class="ml-2">{{ $specialValue->value }}</label>
                            </div>
                        @endforeach
                    @endif
                </div>

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

                @if ($currentSection > 0)
                    <button type="button"
                        class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                        review
                    </button>
                    <button type="submit"
                        class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                        save
                    </button>
                @endif

                @if ($currentSection < count($sections) - 1)
                    <button wire:click="goForward" type="button"
                        class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                        Next
                    </button>
                @endif

            </div>

        </x-forms.form-layout>

    </form>
</div>
