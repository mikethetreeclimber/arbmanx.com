<x-cards.scrolling-card>
    <x-slot name="header">
        <x-navs.content-header postion="top">
            <x-slot name="title">
                <h2>Tree Species</h2>
            </x-slot>
            <x-slot name="trigger">
                <x-btns.dot-btn />
            </x-slot>
            <x-slot name="action">
                <x-inputs.search wire:model="search" />
            </x-slot>
            <x-navs.nav-link>
                Go Back to start
            </x-navs.nav-link>
            <x-navs.nav-link>
                Save Progress
            </x-navs.nav-link>
            <x-navs.nav-link>
                Review
            </x-navs.nav-link>
            <x-navs.nav-link>
                Quit
            </x-navs.nav-link>
        </x-navs.content-header>
    </x-slot>
    <fieldset>
        <legend class="sr-only">
            Pricing plans
        </legend>
        <div class="relative bg-white rounded-md -space-y-px">
            @forelse($trees as $tree)
                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                <label
                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                    <div class="flex items-center text-sm">
                        <input wire:click="treeSpeciesAdded({{ $tree->id }})" type="radio"
                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            aria-labelledby="pricing-plans-0-label"
                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                        <div class="grid grid-cols-2 md:grid-cols-1">
                            <span class="text-gray-900 ml-3 font-bold">Common Name:</span>
                            <span id="pricing-plans-0-label"
                                class="text-gray-900 ml-3 font-medium">{{ $tree->common_name }}</span>
                        </div>
                    </div>
                    <p id="pricing-plans-0-description-0" class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                        <span class="text-gray-900 font-medium">{{ $tree->genus_name }}</span>
                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                        <span class="text-gray-500">{{ $tree->species_name }}</span>
                    </p>
                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                    <p id="pricing-plans-0-description-1"
                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                        Up to {{ $tree->height_at_maturity }} active job postings</p>
                </label>
            @empty
                <label
                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                    <div class="flex items-center text-sm">
                        <input type="radio" name="pricing-plan" value="Startup"
                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                            aria-labelledby="pricing-plans-0-label"
                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                        <span id="pricing-plans-0-label" class="text-gray-900 ml-3 font-medium">No
                            Results Found</span>
                    </div>
                </label>
            @endforelse
        </div>
    </fieldset>
    <x-slot name="footer">
        <div class="m-3">{{ $trees->onEachSide(0)->links() }}</div>
    </x-slot>
</x-cards.scrolling-card>
