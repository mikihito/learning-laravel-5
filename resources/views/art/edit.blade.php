@extends('app')

@section('content')

<h1>edit : {{$article->title}}</h1>


	{!! Form::model($article,['method' => 'PATCH' , 'action' => ['ArticlesController@update', $article->id]]) !!}
		<div class="form-group">
			{!! Form::label('title','Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}<br><br>
		</div>
		<div class="form-group">
			{!! Form::label('body','Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}<br><br>
		</div>
		<div class="form-group">
			{!! Form::label('published_at','Publish On:') !!}
			{!! Form::input('date','published_at',date('Y-m-d'),['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
		</div>



	{!! Form::close() !!}



@if ($errors-> any())
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}
		@endforeach
	</ul>
@endif

@stop