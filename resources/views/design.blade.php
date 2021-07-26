<x-app-layout>
    <div class="flex-1 flex flex-col h-full border border-gray-300 rounded-lg shadow-xl">
        <div class="w-full mx-auto ">


            <x-content-header>
                <x-slot name="title">
                    Eastern Red Cedar
                </x-slot>
                <x-slot name="trigger">
                    <x-dot-btn />
                </x-slot>
                <x-nav-link>
                    Go Back to start
                </x-nav-link>
                <x-nav-link>
                    Save Progress
                </x-nav-link>
                <x-nav-link>
                    Review
                </x-nav-link>
                <x-nav-link>
                    Quit
                </x-nav-link>
            </x-content-header>


        </div>

        <main class="flex-1 overflow-y-auto  focus:outline-none">
            <div class="relative mx-auto">

                <div class="px-4 sm:px-6 md:px-0">
                    <div class="p-2 ">

                        <fieldset>
                            <legend class="sr-only">
                                Pricing plans
                            </legend>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                            <div class="relative bg-white rounded-md -space-y-px">
                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-tl-md rounded-tr-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Startup"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label"
                                            class="text-gray-900 ml-3 font-medium">Startup</span>
                                    </div>
                                    <p id="pricing-plans-0-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$29 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($290 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-0-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 5 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Business"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-1-label"
                                            aria-describedby="pricing-plans-1-description-0 pricing-plans-1-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-1-label"
                                            class="text-gray-900 ml-3 font-medium">Business</span>
                                    </div>
                                    <p id="pricing-plans-1-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$99 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($990 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-1-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Up to 25 active job postings</p>
                                </label>

                                <!-- Checked: "bg-indigo-50 border-indigo-200 z-10", Not Checked: "border-gray-200" -->
                                <label
                                    class="border-gray-200 rounded-bl-md rounded-br-md relative border p-4 flex flex-col cursor-pointer md:pl-4 md:pr-6 md:grid md:grid-cols-3">
                                    <div class="flex items-center text-sm">
                                        <input type="radio" name="pricing-plan" value="Enterprise"
                                            class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-500"
                                            aria-labelledby="pricing-plans-2-label"
                                            aria-describedby="pricing-plans-2-description-0 pricing-plans-2-description-1">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-2-label"
                                            class="text-gray-900 ml-3 font-medium">Enterprise</span>
                                    </div>
                                    <p id="pricing-plans-2-description-0"
                                        class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
                                        <!-- Checked: "text-indigo-900", Not Checked: "text-gray-900" -->
                                        <span class="text-gray-900 font-medium">$249 / mo</span>
                                        <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                        <span class="text-gray-500">($2490 / yr)</span>
                                    </p>
                                    <!-- Checked: "text-indigo-700", Not Checked: "text-gray-500" -->
                                    <p id="pricing-plans-2-description-1"
                                        class="text-gray-500 ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-right">
                                        Unlimited active job postings</p>
                                </label>
                            </div>
                        </fieldset>



                    </div>
                </div>

            </div>
        </main>

    </div>
</x-app-layout>
