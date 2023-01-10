@props(['listItems'])

@php
$list = explode(',', $listItems); 
@endphp


@foreach ($list as $item)
    <span class="font-light">{{$item . ','}}</span>
@endforeach