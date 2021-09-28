<h1>hello this is first view page {{$name}}</h1>

<h1>1. Blade Templets</h1>
***************************
<h3>IF Condition Example</h3>
@if($name=="amit")
<h5>hello,{{$name}}</h5>
@endif

***************************
<h3>IF ELSE CONDITION</h3>
***************************
@if($name=="amit")
<h5>Yes,{{$name}}</h5>
@elseif($name=="sonal")
<h5>Yes,{{$name}}</h5>
@else
<h5>Unknown</h5>
@endif
***************************
<h3>For Loop</h3>
@for($i=1;$i<5;$i++)
 <h5>{{$i}} </h5>
@endfor
***************************
