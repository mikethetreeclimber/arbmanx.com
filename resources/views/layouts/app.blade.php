
        {{-- @isset($modal)
            {{ $modal }}
        @endisset --}}
    <div class="h-screen flex overflow-hidden bg-primary">
        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
            <x-navs.header-nav></x-navs.header-nav>
           {{ $slot }}
        </div>
    </div>
