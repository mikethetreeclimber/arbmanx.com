@props(['id' => null, 'maxWidth' => null])

<x-modals.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        @isset($title)
            <div class="text-lg">
                {{ $title }}
            </div>
        @endisset

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>
    @isset($footer)
        <div class="px-6 py-4 bg-gray-100 text-right">
            {{ $footer }}
        </div>
    @endisset
</x-modals.modal>
