<div class="min-h-screen bg-gradient-to-r from-lime-300 to-amber-400 font-bold flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Drop in to your account
                </h2>
                <p class="mt-2 text-base text-gray-600">
                    Or
                    <a href="{{ route('home') }}" class="font-medium text-lime-600 hover:text-lime-500">
                        Go to Welcome Page
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <form wire:submit.prevent="authenticate" class="space-y-6">
                        <div>
                            <label for="email" class="block text-base font-bold text-amber-900">
                                Email address
                            </label>
                            <div class="mt-1">
                                <input wire:model.lazy="email" id="email" name="email" type="email" autocomplete="email"
                                    required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-base">
                            </div>
                            @error('email')
                                <p class="mt-2 text-base text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="py-2" x-data="{ show: true }">
                            <label for="password" class="block text-base font-bold text-amber-900">
                                Password
                            </label>
                            <div class="relative">
                                <input wire:model.lazy="password" :type="show ? 'password' : 'text'"
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-lime-500 focus:border-lime-500 sm:text-base">
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                    <svg class="h-6 text-lime-400" fill="none" @click="show = !show"
                                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                        </path>
                                    </svg>

                                    <svg class="h-6 text-red-500" fill="none" @click="show = !show"
                                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                                        viewbox="0 0 640 512">
                                        <path fill="currentColor"
                                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                        </path>
                                    </svg>

                                </div>
                            </div>
                            @error('password')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input wire:model.lazy="remember" id="remember" name="remember" type="checkbox"
                                    class="h-4 w-4 text-lime-600 focus:ring-lime-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-base text-amber-900">
                                    Remember me
                                </label>
                            </div>

                            <div class="text-base">
                                <a href="{{ route('password.request') }}"
                                    class="font-bold text-amber-900 hover:text-lime-500">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-base font-bold text-amber-300 bg-lime-700 hover:bg-lime-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-lime-500">
                                Cut It
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('storage/img/from_above_trees.jpg') }}"
            alt="Trees from above">
    </div>
</div>
</section>
