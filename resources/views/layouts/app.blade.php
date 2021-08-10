<x-base-layout>
    <div class="h-screen flex overflow-hidden bg-primary">
        <div class="flex flex-col min-w-0 flex-1 overflow-hidden">
            <x-navs.header-nav></x-navs.header-nav>
            <div class="flex-1 relative z-0 flex overflow-hidden">
                @if (isset($nav))
                    <nav>
                        {{ $nav }}
                    </nav>
                @endif
                <main class="  flex-1 relative z-0 overflow-auto focus:outline-none">
                    <div class="bg-white absolute inset-0 mx-2 my-2 md:my-6 border border-accent rounded-lg">
                        {{ $slot }}
                    </div>
                </main>
                @isset($aside)
                    <aside class="hidden relative lg:flex lg:flex-col flex-shrink-0 w-2/6">
                        <div class="bg-white absolute inset-0 mx-2 my-2 md:my-6 border border-accent rounded-lg">
                            {{ $aside }}
                        </div>
                    </aside>
                @endisset
            </div>
        </div>
    </div>
</x-base-layout>
