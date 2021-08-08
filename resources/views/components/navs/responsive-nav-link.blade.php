@props(['active'])
@php
//TODO: make the this link classes active when the request has certian parameters
$classes = 'block pl-3 pr-4 py-2 border-r-4 border-secondary text-base font-medium text-light bg-primary focus:outline-none focus:text-light focus:bg-primary focus:border-accent transition';
// if ($request === "{$active}") {
// } else {
// $classes = 'block pl-3 pr-4 py-2 border-r-4 border-transparent text-base font-medium text-secondary hover:text-accent hover:bg-primary hover:border-secondary focus:outline-none focus:text-light focus:bg-light focus:border-green-500 transition';
// }
@endphp

<a {{ $attributes }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
