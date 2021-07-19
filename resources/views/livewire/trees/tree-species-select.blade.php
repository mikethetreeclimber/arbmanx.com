<div class="flex flex-row mb-1 sm:mb-0 justify-center w-full">
    <div class="w-1/2">
        <x-forms.input class="h-12" wire:model.debounce="search" type="search" placeholder="Search ..." />
    </div>
</div>

<div class="container mx-auto px-4 sm:px-8 max-w-4xl">
    <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full border border-lime-700  shadow rounded-lg overflow-hidden">
            <table class="table text-amber-400 min-w-full leading-normal">
                <thead>
                    <tr>
                        <th scope="col" class="p-2 bg-gray-800  border-b border-lime-700 text-xl uppercase font-bold">
                            Common Name
                        </th>
                        <th scope="col"
                            class="p-2 bg-gray-800  border-b border-lime-700  text-left text-xl uppercase font-bold">
                            Scientific Name
                        </th>
                        <th scope="col"
                            class="hidden md:table-cell p-2 bg-gray-800  border-b border-lime-700  text-left text-xl uppercase font-bold">
                            Height at Maturatiy
                        </th>
                        <th scope="col"
                            class="hidden md:table-cell p-2 bg-gray-800  border-b border-lime-700  text-left text-xl uppercase font-bold">
                            Growth Rate
                        </th>
                        <th scope="col"
                            class="p-2 bg-gray-800  border-b border-lime-700  text-left text-xl uppercase font-bold">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($trees as $tree)
                        <tr>
                            <td class="p-2 border-b border-lime-700 bg-gray-800 text-xl">
                                <div class="flex items-center">
                                    <div class="ml-2">
                                        <p class=" whitespace-no-wrap">
                                            {{ $tree->common_name }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-2 border-b border-lime-700 bg-gray-800 text-xl">
                                <p class=" whitespace-no-wrap">
                                <div class="">{{ $tree->genus_name }}</div>
                                <div class="">{{ $tree->species_name }}</div>
                                </p>
                            </td>
                            <td
                                class="hidden md:table-cell p-2 border-b border-lime-700 bg-gray-800 text-xl text-center">
                                <p class=" whitespace-no-wrap">
                                    {{ $tree->height_at_maturity }}
                                </p>
                            </td>

                            <td class="hidden md:table-cell p-2 border-b border-lime-700 bg-gray-800 text-xl">
                                <p class=" whitespace-no-wrap">
                                    {{ $tree->growth_rate }}
                                </p>
                            </td>

                            <td class="p-2 border-b border-lime-700 bg-gray-800 text-sm">
                                <button wire:click="$emitUp('treeSpeciesAdded', {{ $tree->id }})" type="button"
                                    class="px-2 py-2 border border-orange-500 rounded-md hover:border-lime-700">
                                    Select
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                No Results Found...
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>

        </div>
    </div>
</div>
