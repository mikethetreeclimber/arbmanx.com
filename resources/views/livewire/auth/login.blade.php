@section('title', 'Sign in to your account')
    <section class="min-h-screen bg-black flex items-stretch text-amber-500 font-roboto">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url({{ url('storage/img/from_above_trees.jpg') }});">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
            style="background-color: #161616;">
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-end"
                style="background-image: url({{ url('storage/img/tree_fog.jpg') }});">
                <div class="absolute bg-black opacity-40 inset-0 z-0"></div>
            </div>
            <div class="w-full py-6 z-20 ">
                <h1 class="my-6 text-6xl font-lobster">
                    Log In
                </h1>
                @if (Route::has('register'))
                    <p class="mt-2 text-base text-center text-gray-600 leading-5 max-w">
                        <a href="{{ route('register') }}"
                            class="font-medium text-amber-600 hover:text-orange-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                            Create a New Account
                        </a>
                    </p>
                @endif
                <form wire:submit.prevent="authenticate" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    <div class="pb-2 pt-4">
                        <div class="relative">
                            <input wire:model.lazy="email" id="email" name="email" type="email" placeholder="Email" required
                                autofocus
                                class="block w-full p-4 text-lg rounded-sm bg-black placeholder-amber-600 border border-amber-500 focus:border-amber-500">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="py-2" x-data="{ show: true }">
                        <div class="relative">
                            <input wire:model.lazy="password" placeholder="Password" :type="show ? 'password' : 'text'"
                                class="block w-full p-4 text-lg rounded-sm bg-black placeholder-amber-600 border border-amber-500">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">

                                <svg class="h-6 text-amber-400" fill="none" @click="show = !show"
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
                    <div class="text-right text-gray-400 hover:underline hover:text-amber-100">
                        <a href="#">Forgot your password?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button
                            class="uppercase block w-full p-4 text-lg border border-amber-500 shadow-xl rounded-full bg-black hover:bg-black focus:outline-none">sign
                            in</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
