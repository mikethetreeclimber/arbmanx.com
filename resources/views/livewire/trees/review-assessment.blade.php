    <x-modals.dialog-modal wire:model.defer="reviewAssessmentModal">
        <x-slot name="content">
            {{-- <div class="mt-6 sm:mt-2 2xl:mt-5">
                <div class="border-b border-gray-200">
                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                        <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                            <a href="#"
                                class="border-pink-500 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                x-state:on="Current" x-state:off="Default" aria-current="page"
                                x-state-description="Current: &quot;border-pink-500 text-gray-900&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                Profile
                            </a>

                            <a href="#"
                                class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                x-state-description="undefined: &quot;border-pink-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                Calendar
                            </a>

                            <a href="#"
                                class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                x-state-description="undefined: &quot;border-pink-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                Recognition
                            </a>

                        </nav>
                    </div>
                </div>
            </div> --}}
            <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <dl class="grid grid-cols-1 gap-x-2 gap-y-4 sm:grid-cols-4">
                    <div class="sm:col-span-3">
                        <dt class="text-xl font-bold text-gray-900 truncate">
                            Tree Hazard Evaluation Review
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            Assessor: {{ ucwords($assessment->assessor->username) }}
                        </dd>
                    </div>
                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Assessment Started
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->started_at->diffForHumans() }}
                        </dd>
                    </div>

                    <div class="sm:col-span-4">
                        <div class="grid grid-cols-2">
                            <div class="col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Common Name
                                </dt>
                                <dd class="mt-1 text-lg text-gray-900">
                                    {{ $assessment->tree->species->common_name }}
                                </dd>
                            </div>
                            <div class="col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Scientific Name
                                </dt>
                                <dd class="mt-1 text-lg text-gray-900">
                                    {{ $assessment->tree->species->genus_name }}
                                    {{ $assessment->tree->species->species_name }}
                                </dd>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Growth Rate
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->species->growth_rate }}
                        </dd>
                    </div>
                    <div class="col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Height At Maturity
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->species->height_at_maturity }}
                        </dd>
                    </div>

                    <div class="sm:col-span-4 pt-4 flex justify-center borded border-t-2 border-gray-800">
                        <dt class="text-md font-medium text-gray-700 pt-2">
                            Assessed Tree Dimensions
                        </dt>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Height
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->height }} Ft.
                        </dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            DBH
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->dbh }} In.
                        </dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Spread
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->spread }} Ft.
                        </dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Number of Trunks
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->number_of_trunks }}
                        </dd>
                    </div>



                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Spread
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->spread }} Ft.
                        </dd>
                    </div>

                    <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                            Number of Trunks
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            {{ $assessment->tree->number_of_trunks }}
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Salary
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            $145,000
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            Birthday
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                            June 8, 1990
                        </dd>
                    </div>

                    <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                            About
                        </dt>
                        <dd class="mt-1 max-w-prose text-sm text-gray-900 space-y-5">

                            <p>Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit dolor
                                consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean posuere aliquam.</p>
                            <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris amet.
                                Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum, cursus felis
                                dui suspendisse velit pharetra. Augue et duis cursus maecenas eget quam lectus. Accumsan
                                vitae nascetur pharetra rhoncus praesent dictum risus suspendisse.</p>

                        </dd>
                    </div>
                </dl>
            </div>
        </x-slot>
    </x-modals.dialog-modal>
