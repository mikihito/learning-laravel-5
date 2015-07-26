@extends('app')

@section('content')

	<h2>TestLaravel</h2>
	@foreach ($articles as $ $article)
		<article>
			<h2>{{$article->}}</h2>

		</article>
	@endforeach


@stop



