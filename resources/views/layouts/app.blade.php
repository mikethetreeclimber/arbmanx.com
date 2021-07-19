@extends('layouts.base')

@section('body')

    {{-- //TODO: make background work for scrolling of overflow. **CSS ideas on bottom --}}
    <img src="{{ asset('storage/img/lone_tree.jpg') }}"
        class="bg-scroll filter blur absolute h-full w-full object-cover" />
    <div class="bg-scroll inset-0 bg-gradient-to-r from-lime-900 to-gray-900 opacity-80 absolute">
    </div>
    <div class="relative container mx-auto">

        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>

@endsection

{{-- background-image: url("/your-dir/your_image.jpg");
min-height: 100%;
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: cover;} --}}
