    <x-modals.dialog-modal wire:model.defer="reviewAssessmentModal" maxWidth="5xl" class=" max-h-full">
        <x-slot name="content">
            <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto">

                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="flex-1 min-w-0">
                            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                                Tree Hazard Evaluation Review
                            </h2>
                            <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                        x-description="Heroicon name: solid/briefcase"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                            clip-rule="evenodd"></path>
                                        <path
                                            d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">
                                        </path>
                                    </svg>
                                    {{ $assessment->tree->species->common_name }}
                                </div>
                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                        x-description="Heroicon name: solid/location-marker"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ ucwords($assessment->assessor->username) }}
                                </div>

                                <div class="mt-2 flex items-center text-sm text-gray-500">
                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                        x-description="Heroicon name: solid/calendar" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    {{ $assessment->started_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 flex lg:mt-0 lg:ml-4">
                            <span class="hidden sm:block">
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500"
                                        x-description="Heroicon name: solid/pencil" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                    Edit
                                </button>
                            </span>

                            <span class="sm:ml-3">
                                <button type="button"
                                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5" x-description="Heroicon name: solid/check"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Publish
                                </button>
                            </span>

                            <!-- Dropdown -->

                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-4">

                    <div class="col-span-4">
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select a tab</label>
                            <select id="tabs" name="tabs"
                                class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                <option>My Account</option>

                                <option>Company</option>

                                <option selected>Team Members</option>

                                <option>Billing</option>
                            </select>
                        </div>
                        <div class="hidden sm:block">
                            <div class="border-b border-gray-200">
                                <nav class="-mb-px flex" aria-label="Tabs">
                                    <!-- Current: "border-indigo-500 text-indigo-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                        My Account
                                    </a>

                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                        Company
                                    </a>

                                    <a href="#"
                                        class="border-indigo-500 text-indigo-600 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm"
                                        aria-current="page">
                                        Team Members
                                    </a>

                                    <a href="#"
                                        class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm">
                                        Billing
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow overflow-hidden sm:rounded-lg sm:col-span-4">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Applicant Information
                            </h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Personal details and application.
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Common Name
                                    </dt>
                                    <dd class="mt-1 text-md text-gray-900">
                                        {{ $assessment->tree->species->common_name }}
                                    </dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-center text-sm font-medium text-gray-500">
                                        Scientific Name
                                    </dt>
                                    <dd class="mt-1 text-md text-gray-900">
                                        {{ $assessment->tree->species->genus_name }}
                                        {{ $assessment->tree->species->species_name }}
                                    </dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-xs font-medium text-gray-500">
                                        Growth Rate
                                    </dt>
                                    <dd class="mt-1 text-xs text-gray-900">
                                        {{ $assessment->tree->species->growth_rate }}
                                    </dd>
                                    <dt class="text-sm mt-1 font-medium text-gray-500">
                                        Height At Maturity
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{ $assessment->tree->species->height_at_maturity }}
                                    </dd>
                                </div>
                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Salary expectation
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        $120,000
                                    </dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        About
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum
                                        culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla
                                        mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad
                                        adipisicing reprehenderit deserunt qui eu.
                                    </dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Attachments
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        <ul role="list"
                                            class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                <div class="w-0 flex-1 flex items-center">
                                                    <!-- Heroicon name: solid/paper-clip -->
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="ml-2 flex-1 w-0 truncate">
                                                        resume_back_end_developer.pdf
                                                    </span>
                                                </div>
                                                <div class="ml-4 flex-shrink-0">
                                                    <a href="#"
                                                        class="font-medium text-indigo-600 hover:text-indigo-500">
                                                        Download
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                <div class="w-0 flex-1 flex items-center">
                                                    <!-- Heroicon name: solid/paper-clip -->
                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <span class="ml-2 flex-1 w-0 truncate">
                                                        coverletter_back_end_developer.pdf
                                                    </span>
                                                </div>
                                                <div class="ml-4 flex-shrink-0">
                                                    <a href="#"
                                                        class="font-medium text-indigo-600 hover:text-indigo-500">
                                                        Download
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot>
    </x-modals.dialog-modal>


    {{-- <div class="sm:col-span-2 pt-4 flex justify-center borded border-t-2 border-gray-800">
                        <dt class="text-md font-medium text-gray-700 pt-2">
                            Assessed Tree Dimensions
                        </dt>
                    </div>

                    <div class="sm:col-span-4 grid grid-cols-4">
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Height
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $assessment->tree->height }} Ft.
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                DBH
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $assessment->tree->dbh }} In.
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Spread
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $assessment->tree->spread }} Ft.
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Number of Trunks
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $assessment->tree->number_of_trunks }}
                            </dd>
                        </div>
                    </div>

                    <div class="sm:col-span-4 pt-4 flex justify-center borded border-t-2 border-gray-800">
                        <dt class="text-md font-medium text-gray-700 pt-2">
                            Characteristics
                        </dt>
                    </div>

                    @foreach ($assessment->characteristics as $characteristic)
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                {{ $characteristic->section }}
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $characteristic->value }}
                            </dd>
                        </div>
                    @endforeach

                    <div class="sm:col-span-4 pt-4 flex justify-center borded border-t-2 border-gray-800">
                        <dt class="text-md font-medium text-gray-700 pt-2">
                            Health
                        </dt>
                    </div>
                    @foreach ($assessment->health as $health)
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                {{ $health->section }}
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                {{ $health->value }}
                            </dd>
                        </div>
                    @endforeach --}}
