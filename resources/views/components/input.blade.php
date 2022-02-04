@props(['disabled' => false, 'module'=>''])
@if($module == "customInput")
<input {!! $attributes->merge(['class' => '']) !!}>
@else
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
@endif
