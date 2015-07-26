@extends('app')

@section('content')

<h1>Teachers</h1>
@foreach ($teachers as $teacher)
	<img src="{{$teacher->img}}" width="200" height="120"><br><br>
	name:  {{$teacher->teacher_name}}<br>
	prof:  {{$teacher->teacher_prof}}<br>
	<a href="{{action('IdeaController@showRecommendBook',[$teacher->teacher_id])}}">Recommend Books</a>
	<br><br><br>

@endforeach
@stop
