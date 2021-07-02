@extends('layouts.app')

@section('content')
    <div class="bg-indigo-900 relative overflow-hidden h-screen">
        <img src="{{ asset('storage/img/tiny_tree.jpg') }}" class="absolute h-full w-full object-cover" />
        <div class="inset-0 bg-black opacity-25 absolute">
        </div>
        <div class="container rounded-lg mx-auto w-4/5 relative z-10 flex items-center py-16 my-24 md:my-32">
            <div class="w-full flex flex-col items-center justify-between relative z-10">
                <p class="flex flex-col items-center font-extrabold text-6xl text-center md:text-8xl text-amber-300">
                    <span class=" animate-pulse">We Are Growing</span><span class=" animate-ping">. . . </span>
                </p>
                <p class="flex flex-col max-w-lg text-center items-center font-extrabold text-lg mt-6 text-amber-200">

                </p>
            </div>
        </div>
    </div>
@endsection
