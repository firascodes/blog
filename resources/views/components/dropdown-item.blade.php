@props(['active' =>false])

@php
$classes = 'block text-left px-3 text-sm hover:bg-blue-300 focus:bg-blue-300';

if ($active) {
$classes = 'bg-blue-300 text-white';
}
@endphp

<a {{ $attributes([ 'class'=> $classes ])}}>
    {{$slot}}</a>