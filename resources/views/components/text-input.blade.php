@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-green-400 focus:ring-green-400 rounded-md shadow-sm']) !!}>
