<div class="h-full">
    @if (key($categories[$currentCategory]) === 'tree_details')
        @livewire('trees.tree-species-select', ['assessment' => $assessment, 'category' =>
        $categories[$currentCategory]])

    @elseif (key($categories[$currentCategory]) === 'demensions')
        <x-cards.scrolling-card>
            <x-slot name="header">
                <x-navs.content-header>
                    <x-slot name="title">
                        {{-- {{ key($category) }} --}}
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
            <div class="bg-white shadow px-4 py-5 sm:rounded-xl sm:p-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Use a permanent address where you can receive mail.
                        </p>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="#" method="POST">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email-address" id="email-address" autocomplete="email"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country /
                                        Region</label>
                                    <select id="country" name="country" autocomplete="country"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div class="col-span-6">
                                    <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                        address</label>
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="city" id="city"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="state" class="block text-sm font-medium text-gray-700">State /
                                        Province</label>
                                    <input type="text" name="state" id="state"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code" class="block text-sm font-medium text-gray-700">ZIP /
                                        Postal</label>
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <x-slot name="footer">
                <x-navs.content-header position="bottom" title="Some Text" subTitle="some more text">


                </x-navs.content-header>
            </x-slot>
        </x-cards.scrolling-card>
        {{-- <div class="max-w-3xl w-full mx-auto z-10">
            <div class="flex ">
                <div class="bg-gray-900 border border-gray-900 shadow-lg  rounded-3xl p-4 m-4">
                    <div class="flex-none sm:flex">
                        <div class="flex-auto sm:ml-5 justify-evenly">
                            <div class="grid grid-cols-2 mb-3 gap-4 space-y-4 font-source">
                                <p class="col-span-2 text-center text-amber-500 text-3xl">Enter the Proper
                                    Demenisons
                                    Requested
                                </p>
                                <x-forms.input class="h-12 text-md" wire:model="height"
                                    placeholder="Enter the Height" />

                                <x-forms.input class="h-12 text-md" wire:model="dbh" placeholder="Enter the DBH" />

                                <x-forms.input class="h-12 text-md" wire:model="spread"
                                    placeholder="Enter the Spread" />

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
        </div> --}}
    @else
        @livewire('trees.tree-assessment-categories-form', ['assessment' => $assessment, 'category' =>
        $categories[$currentCategory]])
    @endif
</div>
{{-- @if (session()->has('success'))
    <div class="bg-green-200 border-green-600 text-green-600 border-l-4 p-4" role="alert">
        <p class="font-bold">
            {{ session('success') }}
        </p>
    </div>
@endif
@if (session()->has('error'))
    <div class="bg-red-200 border-red-600 text-red-600 border-l-4 p-4" role="alert">
        <p class="font-bold">
            {{ session('error') }}
        </p>
    </div>
@endif --}}

{{-- <main class="  flex-1 relative z-0 overflow-hidden focus:outline-none">
    <!-- Start main area-->
    <div
        class="bg-white absolute inset-0 py-6 px-4 sm:px-6 m-12  border-2 border-secondary rounded-xl lg:px-4">
        <div class="h-full ">
            {{ $slot }}
        </div>
    </div>
    <!-- End main area -->
</main>
@isset($aside)
    <aside class="hidden relative xl:flex xl:flex-col flex-shrink-0 w-96 border-l border-gray-200">
        <!-- Start secondary column (hidden on smaller screens) -->
        <div class="absolute inset-0 py-6 px-4 sm:px-6 lg:px-8">
            <div class="h-full border-2 border-gray-200 border-dashed rounded-lg">
                {{ $aside }}
            </div>
        </div>
        <!-- End secondary column -->
    </aside>
@endisset --}}
