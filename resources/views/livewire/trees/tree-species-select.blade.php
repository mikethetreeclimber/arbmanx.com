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
<x-slot name="aside">
    <x-cards.scrolling-card>
        <x-slot name="header">
            <x-navs.content-header postion="top">
                <x-slot name="title">
                    Info
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
        <div class="space-y-6 rounded-xl">
            <div>
                <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1582053433976-25c00369fc93?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=512&q=80"
                        alt="" class="object-cover">
                </div>
                <div class="mt-4 flex items-start justify-between">
                    <div>
                        <h2 class="text-lg font-medium text-gray-900"><span class="sr-only">Details for
                            </span>IMG_4985.HEIC</h2>
                        <p class="text-sm font-medium text-gray-500">3.9 MB</p>
                    </div>
                    <button type="button"
                        class="ml-4 h-8 w-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <!-- Heroicon name: outline/heart -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        <span class="sr-only">Favorite</span>
                    </button>
                </div>
            </div>
            <div>
                <h3 class="font-medium text-gray-900">Information</h3>
                <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Uploaded by</dt>
                        <dd class="text-gray-900">Marie Culver</dd>
                    </div>
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Created</dt>
                        <dd class="text-gray-900">June 8, 2020</dd>
                    </div>
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Last modified</dt>
                        <dd class="text-gray-900">June 8, 2020</dd>
                    </div>
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Dimensions</dt>
                        <dd class="text-gray-900">4032 x 3024</dd>
                    </div>
                    <div class="py-3 flex justify-between text-sm font-medium">
                        <dt class="text-gray-500">Resolution</dt>
                        <dd class="text-gray-900">72 x 72</dd>
                    </div>
                </dl>
            </div>
            <div>
                <h3 class="font-medium text-gray-900">Description</h3>
                <div class="mt-2 flex items-center justify-between">
                    <p class="text-sm text-gray-500 italic">Add a description to this image.</p>
                    <button type="button"
                        class="-mr-2 h-8 w-8 bg-white rounded-full flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <!-- Heroicon name: solid/pencil -->
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                        <span class="sr-only">Add description</span>
                    </button>
                </div>
            </div>
            <div>
                <h3 class="font-medium text-gray-900">Shared with</h3>
                <ul class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                    <li class="py-3 flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=1024&h=1024&q=80"
                                alt="" class="w-8 h-8 rounded-full">
                            <p class="ml-4 text-sm font-medium text-gray-900">Aimee Douglas</p>
                        </div>
                        <button type="button"
                            class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                class="sr-only"> Aimee Douglas</span></button>
                    </li>
                    <li class="py-3 flex justify-between items-center">
                        <div class="flex items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixqx=oilqXxSqey&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="w-8 h-8 rounded-full">
                            <p class="ml-4 text-sm font-medium text-gray-900">Andrea McMillan</p>
                        </div>
                        <button type="button"
                            class="ml-6 bg-white rounded-md text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Remove<span
                                class="sr-only"> Andrea McMillan</span></button>
                    </li>
                    <li class="py-2 flex justify-between items-center">
                        <button type="button"
                            class="group -ml-1 bg-white p-1 rounded-md flex items-center focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <span
                                class="w-8 h-8 rounded-full border-2 border-dashed border-gray-300 flex items-center justify-center text-gray-400">
                                <!-- Heroicon name: solid/plus -->
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                        clip-rule="evenodd" />
                                </svg>
                            </span>
                            <span
                                class="ml-4 text-sm font-medium text-indigo-600 group-hover:text-indigo-500">Share</span>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="flex">
                <button type="button"
                    class="flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Download
                </button>
                <button type="button"
                    class="flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Delete
                </button>
            </div>
        </div>
        <x-slot name="footer">
            <x-navs.content-header position="bottom" subTitle="Thanks for Visiting">

                <div class="m-3"> some other link</div>
            </x-navs.content-header>
        </x-slot>
    </x-cards.scrolling-card>
</x-slot>
