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
    <main class="w-full mx-auto pt-10 pb-12 px-4 lg:pb-16">
        <div class="pt-8 grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6 flex space-x-4">
                <p class="mt-1 font-semibold text-md text-blueGray-700">Selected Species</p>
                <h2 class="text-xl font-bold text-blueGray-900">{{ ucwords($treeCommonName) }}</h2>
            </div>

            <div class="sm:col-span-3">
                <label for="height" class="block text-sm font-medium text-blue-gray-900">
                    Height
                </label>
                <input type="text" wire:model.defer="height" name="height"
                    class="mt-1 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="sm:col-span-3">
                <label for="dbh" class="block text-sm font-medium text-blue-gray-900">
                    DBH
                </label>
                <input type="text" wire:model.defer="dbh" name="dbh"
                    class="mt-1 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="sm:col-span-3">
                <label for="spread" class="block text-sm font-medium text-blue-gray-900">
                    Spread
                </label>
                <input type="text" wire:model.defer="spread" name="spread"
                    class="mt-1 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="sm:col-span-3">
                <label for="number_of_trunks" class="block text-sm font-medium text-blue-gray-900">
                    Number Of Trunks
                </label>
                <input type="text" wire:model.defer="numberOfTrunks" name="number_of_trunks"
                    class="mt-1 block w-full border-blue-gray-300 rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
            </div>
        </div>
    </main>
    <x-slot name="footer">
        <div class="p-4">
            <div class="flex justify-end">
                <button type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    Cancel
                </button>
                <button wire:click="createAssessedTreeModel" type="button"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-light bg-sky-500 hover:bg-sky-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                    Add Details
                </button>
            </div>
        </div>
    </x-slot>
</x-cards.scrolling-card>
