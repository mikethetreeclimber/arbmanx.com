@props(['disabled' => false])



<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-lg border-transparent flex-1 appearance-none border border-lime-300 w-full py-2 px-4 bg-black bg-opacity-50 text-amber-700 placeholder-amber-500 font-semibold shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-lime-600 focus:border-transparent']) !!}>
