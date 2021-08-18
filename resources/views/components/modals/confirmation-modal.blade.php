@props(['id' => null, 'maxWidth' => null])

<x-modals.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">

            {{-- <x-icons.tree-icon /> --}}

            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                @isset($title)
                    <h3 class="text-lg">
                        {{ $title }}
                    </h3>
                @endisset

                <div class="mt-2">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>
    @isset($footer)
        <div class="px-6 py-4 bg-white text-right">
            {{ $footer }}
        </div>
    @endisset
</x-modals.modal>
