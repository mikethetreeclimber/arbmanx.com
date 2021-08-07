<x-cards.scrolling-card>
    <div class="md:grid md:grid-cols-12 md:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <!-- Current: "bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white", Default: "text-gray-900 hover:text-gray-900 hover:bg-gray-50" -->
                <x-navs.responsive-nav-link href="#" active="tree_species" :request="request()">
                    <span class="inline-flex justify-center items-center pr-2 ml-4">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        Tree Details
                    </span>
                </x-navs.responsive-nav-link>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/key -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                    <span class="truncate">
                        Tree Details
                    </span>
                </a>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/credit-card -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                    </svg>
                    <span class="truncate">
                        Plan &amp; Billing
                    </span>
                </a>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/user-group -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="truncate">
                        Team
                    </span>
                </a>

                <a href="#"
                    class="text-gray-900 hover:text-gray-900 hover:bg-gray-50 group rounded-md px-3 py-2 flex items-center text-sm font-medium">
                    <!-- Heroicon name: outline/view-grid-add -->
                    <svg class="text-gray-400 group-hover:text-gray-500 flex-shrink-0 -ml-1 mr-3 h-6 w-6"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                    </svg>
                    <span class="truncate">
                        Integrations
                    </span>
                </a>
            </nav>
        </aside>
        <div class="col-span-9">

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


            <!-- TODO -->
            {{-- List group with input with btn in header --}}
            {{-- <div class="space-y-2">
                      <div class="space-y-1">
                        <label for="add-team-members" class="block text-sm font-medium text-gray-700">
                          Add Team Members
                        </label>
                        <p id="add-team-members-helper" class="sr-only">Search by email address</p>
                        <div class="flex">
                          <div class="flex-grow">
                            <input type="text" name="add-team-members" id="add-team-members" class="block w-full shadow-sm focus:ring-sky-500 focus:border-sky-500 sm:text-sm border-gray-300 rounded-md" placeholder="Email address" aria-describedby="add-team-members-helper">
                          </div>
                          <span class="ml-3">
                            <button type="button" class="bg-white inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500">
                              <!-- Heroicon name: solid/plus -->
                              <svg class="-ml-2 mr-1 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                              </svg>
                              <span>Add</span>
                            </button>
                          </span>
                        </div>
                      </div>
            
                      <div class="border-b border-gray-200">
                        <ul class="divide-y divide-gray-200">
                          <li class="py-4 flex">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1513910367299-bce8d8a0ebf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div class="ml-3 flex flex-col">
                              <span class="text-sm font-medium text-gray-900">Calvin Hawkins</span>
                              <span class="text-sm text-gray-500">calvin.hawkins@example.com</span>
                            </div>
                          </li>
            
                          <li class="py-4 flex">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div class="ml-3 flex flex-col">
                              <span class="text-sm font-medium text-gray-900">Bessie Richards</span>
                              <span class="text-sm text-gray-500">bessie.richards@example.com</span>
                            </div>
                          </li>
            
                          <li class="py-4 flex">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            <div class="ml-3 flex flex-col">
                              <span class="text-sm font-medium text-gray-900">Floyd Black</span>
                              <span class="text-sm text-gray-500">floyd.black@example.com</span>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div> --}}
            {{-- Radio Group --}}
            {{-- <fieldset>
                      <legend class="text-sm font-medium text-gray-900">
                        Privacy
                      </legend>
            
                      <div class="mt-1 bg-white rounded-md shadow-sm -space-y-px">
                        <!-- Checked: "bg-sky-50 border-sky-200 z-10", Not Checked: "border-gray-200" -->
                        <label class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex cursor-pointer">
                          <input type="radio" name="privacy-setting" value="Public access" class="h-4 w-4 mt-0.5 cursor-pointer text-sky-600 border-gray-300 focus:ring-sky-500" aria-labelledby="privacy-setting-0-label" aria-describedby="privacy-setting-0-description">
                          <div class="ml-3 flex flex-col">
                            <!-- Checked: "text-sky-900", Not Checked: "text-gray-900" -->
                            <span id="privacy-setting-0-label" class="text-gray-900 block text-sm font-medium">
                              Public access
                            </span>
                            <!-- Checked: "text-sky-700", Not Checked: "text-gray-500" -->
                            <span id="privacy-setting-0-description" class="text-gray-500 block text-sm">
                              This project would be available to anyone who has the link
                            </span>
                          </div>
                        </label>
            
                        <!-- Checked: "bg-sky-50 border-sky-200 z-10", Not Checked: "border-gray-200" -->
                        <label class="border-gray-200 relative border p-4 flex cursor-pointer">
                          <input type="radio" name="privacy-setting" value="Private to Project Members" class="h-4 w-4 mt-0.5 cursor-pointer text-sky-600 border-gray-300 focus:ring-sky-500" aria-labelledby="privacy-setting-1-label" aria-describedby="privacy-setting-1-description">
                          <div class="ml-3 flex flex-col">
                            <!-- Checked: "text-sky-900", Not Checked: "text-gray-900" -->
                            <span id="privacy-setting-1-label" class="text-gray-900 block text-sm font-medium">
                              Private to Project Members
                            </span>
                            <!-- Checked: "text-sky-700", Not Checked: "text-gray-500" -->
                            <span id="privacy-setting-1-description" class="text-gray-500 block text-sm">
                              Only members of this project would be able to access
                            </span>
                          </div>
                        </label>
            
                        <!-- Checked: "bg-sky-50 border-sky-200 z-10", Not Checked: "border-gray-200" -->
                        <label class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex cursor-pointer">
                          <input type="radio" name="privacy-setting" value="Private to you" class="h-4 w-4 mt-0.5 cursor-pointer text-sky-600 border-gray-300 focus:ring-sky-500" aria-labelledby="privacy-setting-2-label" aria-describedby="privacy-setting-2-description">
                          <div class="ml-3 flex flex-col">
                            <!-- Checked: "text-sky-900", Not Checked: "text-gray-900" -->
                            <span id="privacy-setting-2-label" class="text-gray-900 block text-sm font-medium">
                              Private to you
                            </span>
                            <!-- Checked: "text-sky-700", Not Checked: "text-gray-500" -->
                            <span id="privacy-setting-2-description" class="text-gray-500 block text-sm">
                              You are the only one able to access this project
                            </span>
                          </div>
                        </label>
                      </div>
                    </fieldset> --}}
        </div>
    </div>
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
