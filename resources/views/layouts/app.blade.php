@extends('layouts.base')

@section('body')
    <img src="{{ asset('storage/img/lone_tree.jpg') }}" class="filter blur absolute h-full w-full object-cover" />
    <div class="inset-0 bg-gradient-to-r from-lime-900 to-gray-900 opacity-80 absolute">
    </div>
    <div class="relative container mx-auto">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </div>

@endsection
