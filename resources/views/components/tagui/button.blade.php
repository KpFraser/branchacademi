@props(['buttonType' => '', 'buttonClass'=>'', 'iconClass'=>'', 'buttonText'=>'', 'module'=>''])
@if($module == "customButton")
<button type="{{$buttonType}}" class="{{$buttonClass}}">
    {{$buttonText}}
</button>
@else
<button type="{{$buttonType}}" class="{{$buttonClass}}">
    <x-tagui.icon iconClass="{{$iconClass}}"></x-tagui.icon>
    {{$buttonText}}
</button>
@endif