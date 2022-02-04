@props(['paraClass'=>'' , 'paraText'=>'' , 'iconClass'=> '' , 'ancrHref'=> '' , 'ancrClass'=> '' ,'ancrText'=>'' , 'module'=> ''])
@if($module == "customPara")
    <p class="{{$paraClass}}"><i class="{{$iconClass}}"></i> {{$paraText}}</p>
@elseif($module == "customParaAncr")
    <p class="{{$paraClass}}"> {{$paraText}}<a href="{{$ancrHref}}" class="{{$ancrClass}}"> {{$ancrText}}</a></p>
@else
    <p class="{{$paraClass}}">{!!$paraText!!}</p>
@endif