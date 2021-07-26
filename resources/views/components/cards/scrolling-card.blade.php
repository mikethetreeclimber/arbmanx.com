    <div class="flex-1 flex flex-col h-full">
        @isset($header)
            <div class="w-full mx-auto ">
                {{ $header }}
            </div>
        @endisset
        <main class="flex-1 overflow-y-auto  focus:outline-none">
            <div class="relative mx-auto">
                <div class="m-2">
                    <div class="h-full p-2 rounded-xl">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
        @isset($footer)
            <div class="w-full mx-auto  border-t-2 border-accent bg-secondary rounded-b-lg">
                {{ $footer }}
            </div>
        @endisset
    </div>
