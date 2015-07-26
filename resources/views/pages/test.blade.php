@extends('app')

@section('content')

About...<br>

@if(count($people))
My name is ... ?
<ul>
	@foreach ($people as $person)
		<li>{{ $person }}</li>
	@endforeach
</ul>

@endif

@stop


