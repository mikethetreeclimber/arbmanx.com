<x-forms.form-card>

    <x-forms.form-section>
        <x-forms.form-input-block>

            <x-slot name="label">
                Tree Species
            </x-slot>
            <select id="animals"
                class="rounded-lg border-transparent flex-1 appearance-none border border-lime-300 w-full py-2 px-4 bg-black bg-opacity-50 text-amber-500 placeholder-amber-500 font-semibold shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent"
                name="animals">
                <option value="">
                    Select an options
                </option>
                <option value="dog">
                    Dog
                </option>
                <option value="cat">
                    Cat
                </option>
            </select>
        </x-forms.form-input-block>
    </x-forms.form-section>

    {{-- <x-forms.form-section-inline>
        <x-forms.form-input-inline>
            <x-slot name="label">
                Height
            </x-slot>
            <x-forms.input placeholder="Height" />
        </x-forms.form-input-inline>

        <x-forms.form-input-inline>
            <x-slot name="label">
                DBH
            </x-slot>
            <x-forms.input placeholder="DBH" />
        </x-forms.form-input-inline>
    </x-forms.form-section-inline>

    <x-forms.form-section>
        <x-forms.form-input-block>
            <x-slot name="label">
                Spread
            </x-slot>
            <x-forms.input placeholder="Spread" />
        </x-forms.form-input-block>

        <x-forms.form-input-block>
            <x-slot name="label">
                Trunks
            </x-slot>
            <x-forms.input placeholder="Trunks" />
        </x-forms.form-input-block>
    </x-forms.form-section> --}}

</x-forms.form-card>


{{-- <div class="items-center w-full p-8 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
        <h2 class="max-w-sm mx-auto md:w-4/12">
            Change password
        </h2>
        <div class="w-full max-w-sm pl-2 mx-auto space-y-5 md:w-5/12 md:pl-9 md:inline-flex">
            <div class=" ">
                <input type="text" id="user-info-password"
                    class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Password" />
            </div>
        </div>
        <div class="text-center md:w-3/12 md:pl-6">
            <button type="button"
                class="py-2 px-4  bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                Change
            </button>
        </div>
    </div>
    <hr />
    <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
        <button type="submit"
            class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
            Save
        </button>
    </div> --}}
