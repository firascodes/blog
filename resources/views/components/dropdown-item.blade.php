@props(['active' =>false])

@php
$classes = 'block text-left px-3 text-sm hover:bg-gray-300 focus:bg-gray-300 text-blue-700 ';

if ($active) {
$classes .= 'bg-blue-200 text-white';
}
@endphp

<a {{ $attributes([ 'class'=> $classes ])}}>
    {{$slot}}</a>