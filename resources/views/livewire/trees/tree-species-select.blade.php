<div class="container mx-auto px-4 sm:px-8 ">
    <div class="py-8">
        <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
            <h2 class="text-2xl text-amber-600 leading-tight">
                Tree Species
            </h2>
            <div class="text-end">
                <div class=" relative ">
                    <x-forms.input wire:model.debounce="search" type="search" id="search" placeholder="Search ..." />
                </div>
                {{-- <button
                        class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                        type="submit">
                        Filter
                    </button> --}}
            </div>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block shadow rounded-lg overflow-hidden">
                <table class=" leading-normal">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3  border-b border-amber-200 text-amber-500  text-left text-sm uppercase font-normal">
                                Common Name
                            </th>
                            <th scope="col"
                                class="px-5 py-3  border-b border-amber-200 text-amber-500  text-left text-sm uppercase font-normal">
                                Scientific Name
                            </th>
                            <th scope="col"
                                class="px-5 py-3  border-b border-amber-200 text-amber-500  text-left text-sm uppercase font-normal">
                                Height at Maturatiy
                            </th>
                            <th scope="col"
                                class="px-5 py-3  border-b border-amber-200 text-amber-500  text-left text-sm uppercase font-normal">
                                Growth Rate
                            </th>
                            <th scope="col"
                                class="px-5 py-3  border-b border-amber-200 text-amber-500  text-left text-sm uppercase font-normal">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($trees as $tree)
                            <tr>
                                <td class="px-5 py-5 border-b border-amber-200 text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <a href="#" class="block relative">
                                                <img alt="profil" src="{{ asset('storage/img/tiny_tree.jpg') }}"
                                                    class="mx-auto object-cover rounded-full h-10 w-10 " />
                                            </a>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-amber-400 whitespace-no-wrap">
                                                {{ $tree->common_name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-amber-200 text-sm">
                                    <div class="text-amber-300 text-sm">
                                        {{ $tree->genus_name }} {{ $tree->species_name }}
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-amber-200 text-sm">
                                    <p class="text-amber-900 whitespace-no-wrap">
                                        {{ $tree->height_at_maturity }}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-amber-200 text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-amber-900 leading-tight">
                                        <span class="relative">
                                            {{ $tree->growth_rate }}
                                        </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-amber-200 text-sm">
                                    <button wire:click="speciesAddedToAssessedTree({{ $tree->id }})" type="button"
                                        class="text-indigo-600 hover:text-indigo-900">
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
                <div class="px-5 py-5 flex flex-col xs:flex-row items-center xs:justify-between">
                    <div class="flex items-center">
                        {!! $trees->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
