@extends('app')

@section('content')

<h2>Test</h2>
	@foreach ($articles as $ $article)
		<ul>
			<li>{{ $article }}</li>
		</ul>
	@endforeach


{{$articles}}

@stop