@extends('app')

@section('content')

<h1>Ok?</h1>
	@foreach ($articles as $article)
		<h2>{{$article -> title}}</h2>
		<a href="{{action('ArticlesController@show',[$article->id])}}">{{$article -> body}}</a>
		<br>
	@endforeach




@stop