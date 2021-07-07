@if ($step === 'tree_species')
    <div class="px-4 py-6">
        <livewire:trees.tree-species-select />
    </div>
@endif



@if ($step === 'height_dbh')
    <div class="max-w-3xl w-full mx-auto z-10">
        <div class="flex flex-col">
            <div class="bg-gray-900 border border-gray-900 shadow-lg  rounded-3xl p-4 m-4">
                <div class="flex-none sm:flex">
                    <div class="flex-auto sm:ml-5 justify-evenly">
                        <div class="grid grid-cols-2 mb-3 gap-4 space-y-4 font-source">
                            <p class="col-span-2 text-center text-amber-500 text-3xl">Enter the Proper Demenisons
                                Requested
                            </p>
                            <x-forms.input class="h-12 text-md" wire:model="height" placeholder="Enter the Height" />

                            <x-forms.input class="h-12 text-md" wire:model="dbh" placeholder="Enter the DBH" />

                            <x-forms.input class="h-12 text-md" wire:model="spread" placeholder="Enter the Spread" />

                            <x-forms.input class="h-12 text-md" wire:model="numberOfTrunks"
                                placeholder="Enter the number of Trunks" />
                        </div>
                        <button wire:click="createAssessedTreeDetails"
                            class="bg-lime-700 px-2 py-4 block rounded shadow border border-amber-500 font-source text-xl text-amber-500 w-full">Go
                            to Next
                            Step</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@if ($step === 'characteristics')
    {{-- @if (session()->has('success'))
        <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
            <p class="font-bold">
                {{ session('success') }}
            </p>
        </div>
    @endif --}}

    <h1 class="text-5xl"> Characteristics ....</h1>
    <h1 class="text-5xl"> Characteristics ....</h1>
    <h1 class="text-5xl"> Characteristics ....</h1>
    <h1 class="text-5xl"> Characteristics ....</h1>
    <h1 class="text-5xl"> Characteristics ....</h1>
    <h1 class="text-5xl"> Characteristics ....</h1>
@endif
