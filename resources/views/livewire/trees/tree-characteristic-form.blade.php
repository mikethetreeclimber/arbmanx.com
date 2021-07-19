{{-- // TODOs //
// MODALS: Each section of each category needs atleast one modal for more information on the section to be split in the
future to provide information for every option in every section of every category
// COMPONENTS: Extract into compontents using the atomic design pattern
// REUSABLE: Make the form dynamic using the Assessment Class and corresponding category class to insert the values --}}
<div>
    <form wire:submit.prevent="addCharacteristic">
        <div class="text-center mt-4 w-full pt-4 text-amber-500 md:inline-flex md:space-y-0">
            <h2 class="max-w-sm mx-auto text-5xl font-extrabold">
                Characteristics
            </h2>
        </div>

        <div class="max-w-3xl w-full mx-auto z-10 mt-12">
            <div class="flex flex-col">
                @if ($section === 1)
                    <div
                        class="bg-gray-900 border bg-opacity-80 border-gray-900 shadow-2xl  rounded-3xl p-2 m-2 md:p-4 md:m-4">
                        <div class="flex justify-content-center">
                            {{-- <div class=" relative block ">
                            <img src="{{ asset('storage/img/treeSilhouette.jpeg') }}" alt="aji"
                            class=" w-32 h-32 object-cover rounded-2xl">
                            </div> --}}
                            <div class="flex-auto justify-evenly w-full">
                                <div class="flex items-center border border-emerald-500 rounded-xl px-4 py-4">
                                    <div class="grid grid-cols-2 align-middle flex-1 pl-1 md:px-2 m-1">
                                        <div
                                            class="flex justify-center items-center text-lg md:text-2xl md:mb-2 font-bold text-amber-300 text-center">
                                            <h1>Forms</h1>
                                            <button wire:click="openCategoryDetailsModal('forms')"
                                                class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                                                show details about tree forms
                                            </button>
                                        </div>
                                        <div class=" text-sm md:text-lg font-bold text-gray-200 text-left">
                                            <div class="grid grid-cols-2 gap-2 relative">

                                                @foreach ($treeForms as $key => $form)

                                                    <div class="col-span-2 my-1">
                                                        <input wire:model.lazy="form" name="{{ $form->type }}"
                                                            type="radio" value="{{ $form->id }}"
                                                            id="option{{ $key }}"
                                                            class="form-radio text-emerald-500" />
                                                        <label for="option{{ $key }}"
                                                            class="ml-2">{{ $form->name }}</label>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endif

                @if ($section === 2)
                    <div
                        class="bg-gray-900 border bg-opacity-80 border-gray-900 shadow-2xl  rounded-3xl p-2 m-2 md:p-4 md:m-4">
                        <div class="flex justify-content-center">
                            <div class="flex-auto justify-evenly w-full">
                                <div class="flex items-center border border-emerald-500 rounded-xl px-4 py-4">
                                    <div class="grid grid-cols-2 align-middle flex-1 pl-1 md:px-2 m-1">
                                        <div
                                            class="flex justify-center items-center text-lg md:text-2xl md:mb-2 font-bold text-amber-300 text-center">
                                            <h1>Crown Class</h1>
                                        </div>
                                        <div class=" text-sm md:text-lg font-bold text-gray-200 text-left">
                                            <div class="grid grid-cols-2 gap-2 relative">
                                                @foreach ($treeCrownClasses as $key => $crownClass)
                                                    <div class="col-span-2 my-1">
                                                        <input type="radio" wire:model.lazy="crownClass"
                                                            value="{{ $crownClass->id }}"
                                                            name="{{ $crownClass->type }}"
                                                            id="option{{ $key }}"
                                                            class="form-radio text-emerald-500" />
                                                        <label for="option{{ $key }}"
                                                            class="ml-2">{{ $crownClass->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($section === 3)
                    <div
                        class="bg-gray-900 border bg-opacity-80 border-gray-900 shadow-2xl  rounded-3xl p-2 m-2 md:p-4 md:m-4">
                        <div class="flex justify-content-center">
                            <div class="flex-auto justify-evenly w-full">
                                <div class="flex items-center border border-emerald-500 rounded-xl px-4 py-4">
                                    <div class="grid grid-cols-2 align-middle flex-1 pl-1 md:px-2 m-1">
                                        <div
                                            class="flex justify-center items-center text-lg md:text-2xl md:mb-2 font-bold text-amber-300 text-center">
                                            <h1>Age Class</h1>
                                        </div>
                                        <div class=" text-sm md:text-lg font-bold text-gray-200 text-left">
                                            <div class="grid grid-cols-2 gap-2 relative">
                                                @foreach ($treeAgeClasses as $key => $ageClass)
                                                    <div class="col-span-2 my-1">
                                                        <input type="radio" wire:model.lazy="ageClass"
                                                            value="{{ $ageClass->id }}"
                                                            name="{{ $ageClass->type }}"
                                                            id="option{{ $key }}"
                                                            class="form-radio text-emerald-500" />
                                                        <label for="option{{ $key }}"
                                                            class="ml-2">{{ $ageClass->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($section === 4)

                    <div
                        class="bg-gray-900 border bg-opacity-80 border-gray-900 shadow-2xl  rounded-3xl p-2 m-2 md:p-4 md:m-4">
                        <div class="flex justify-content-center">
                            <div class="flex-auto justify-evenly w-full">
                                <div class="flex items-center border border-emerald-500 rounded-xl px-4 py-4">
                                    <div class="grid grid-cols-2 align-middle flex-1 pl-1 md:px-2 m-1">
                                        <div
                                            class="flex justify-center items-center text-lg md:text-2xl md:mb-2 font-bold text-amber-300 text-center">
                                            <h1>Special Value</h1>
                                        </div>
                                        <div class=" text-sm md:text-lg font-bold text-gray-200 text-left">
                                            <div class="grid grid-cols-2 gap-2 relative">
                                                @foreach ($treeSpecialValues as $key => $specialValue)
                                                    <div class="col-span-2 my-1">
                                                        <input type="checkbox" wire:model="selectedSpecialValues"
                                                            value="{{ $specialValue->id }}"
                                                            name="{{ $specialValue->type }}{{ $key }}"
                                                            id="option{{ $key }}"
                                                            class="form-radio text-emerald-500" />
                                                        <label for="option{{ $key }}"
                                                            class="ml-2">{{ $specialValue->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="flex items-center justify-between p-2 m-2 md:p-4 md:m-4">
                    @if ($section >= 2)
                        <button wire:click="goBack" type="button"
                            class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                            back
                        </button>
                    @else
                        <div></div>
                    @endif

                    @if ($section > 1)
                        <button type="submit"
                            class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                            save
                        </button>
                        <button type="button"
                            class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                            review
                        </button>
                    @endif

                    @if ($section <= 3)
                        <button wire:click="goForward" type="button"
                            class="rounded-xl px-6 py-3 uppercase text-lg font-semibold hover:bg-gray-700 text-amber-400 bg-gray-900 opacity-80">
                            Next
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </form>
</div>
