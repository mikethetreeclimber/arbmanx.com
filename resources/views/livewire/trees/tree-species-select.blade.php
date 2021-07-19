<div class="container mx-auto px-4 sm:px-8 max-w-3xl font-source">
    <div class="">
        <div class="flex flex-row mb-1 sm:mb-0 justify-center w-full">
            <div class="w-1/2">
                <x-forms.input class="h-12" wire:model.debounce="search" type="search" placeholder="Search ..." />
            </div>
        </div>
        <div class="flex items-center justify-center">
            <div class="col-span-12">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table text-amber-400 border-separate space-y-6 text-2xl">
                        <thead class="bg-gray-800 text-amber-300">
                            <tr>
                                <th class="p-3">Common Name</th>
                                <th class="p-3 text-left">Scientific Name</th>
                                <th class="p-3 text-left">Height at Maturatiy</th>
                                <th class="p-3 text-left">Growth Rate</th>
                                <th class="p-3 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($trees as $tree)
                                <tr class="bg-gray-800">
                                    <td class="p-3">
                                        <div class="flex align-items-center">
                                            <div class="ml-3">
                                                {{ $tree->common_name }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3">
                                        <div class="">{{ $tree->genus_name }}</div>
                                        <div class="">{{ $tree->species_name }}</div>
                                    </td>
                                    <td class="p-3 font-bold">
                                        {{ $tree->height_at_maturity }}
                                    </td>
                                    <td class="p-3">
                                        <span class=" text-gray-50 rounded-md px-2">{{ $tree->growth_rate }}</span>
                                    </td>
                                    <td class="p-3 ">
                                        <button wire:click="$emitUp('treeSpeciesAdded', {{ $tree->id }})"
                                            type="button" class="text-indigo-600 hover:text-indigo-900">
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
        <style>
            .table {
                border-spacing: 0 15px;
            }

            i {
                font-size: 1rem !important;
            }

            .table tr {
                border-radius: 20px;
            }

            tr td:nth-child(n+5),
            tr th:nth-child(n+5) {
                border-radius: 0 .625rem .625rem 0;
            }

            tr td:nth-child(1),
            tr th:nth-child(1) {
                border-radius: .625rem 0 0 .625rem;
            }

        </style>
    </div>
</div>
