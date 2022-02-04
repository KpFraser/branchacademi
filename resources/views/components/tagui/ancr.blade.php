@props(['ancrClass'=>'' , 'ancrHref'=>'' , 'ancrText'=>'' , 'iconClass'=>'' , 'module'=> ''])
@if($module == "customAncr")
    <a href="{{$ancrHref}}" class="{{$ancrClass}}">{{$ancrText}} <x-tagui.icon iconClass="{{$iconClass}}"></x-tagui.icon></a>
@else
    <a href="{{$ancrHref}}" class="{{$ancrClass}}">{{$ancrText}}</a>
@endif