<div class="bg-gray-900 border bg-opacity-80 border-gray-900 shadow-2xl  rounded-3xl p-2 m-2 md:p-4 md:m-4">
    <div class="flex justify-content-center">
        <div class="flex-auto justify-evenly w-full">
            <div class="flex items-center border border-emerald-500 rounded-xl px-4 py-4">
                <div class="grid grid-cols-2 align-middle flex-1 pl-1 md:px-2 m-1">
                    <x-forms.form-title>
                        {{ $title }}
                    </x-forms.form-title>

                    <x-forms.input-group>
                        {{ $slot }}
                    </x-forms.input-group>
                </div>
            </div>
        </div>
    </div>
</div>
