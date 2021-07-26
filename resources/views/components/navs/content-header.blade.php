@props([
    'title' => '',
    'subTitle' => '',
    'position' => 'top',
])
<header x-data="{menu: false}">
    <div
        class="flex items-center  justify-between text-primary bg-secondary {{ $position === 'bottom' ? 'border-t-2 rounded-b-lg' : 'border-b-2 rounded-t-lg' }} border-accent px-4 py-3">
        <div>
            <div class="flex flex-wrap items-baseline">
                <h3 class="ml-2 mt-2 text-2xl leading-6 font-medium text-light">
                    {{ $title ?? ' ' }}
                </h3>
                <p class="ml-2 mt-1 text-lg text-light truncate">{{ $subTitle ?? ' ' }}</p>
            </div>
        </div>
        <div>
            {{ $action ?? ' ' }}
        </div>
        <div @click="menu = !menu">
            {{ $trigger ?? '' }}
        </div>
    </div>

    <!--
        TODO  Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
    <div x-show="menu"
        class="z-50 origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu" aria-orientation="vertical" aria-labelledby="menu-0-button" tabindex="-1">
        <div class="py-1" role="none">
            {{ $slot }}
        </div>
    </div>
</header>
