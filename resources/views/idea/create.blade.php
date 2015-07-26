@extends('app')

@section('content')

<h1>Create your account</h1>
<br>
{!! Form::open(['url'=>'create']) !!}
	{!! Form::label('student_name','Last_Name:') !!}<br>
	{!! Form::text('student_name',null,['class' => 'form-control']) !!}<br>
<br>
	{!! Form::label('pass','Password:') !!}<br>
	{!! Form::text('pass',null,['class' => 'form-control']) !!}<br>
<br>
	{!! Form::submit('Create Account!',['btn btn-primary form-control']) !!}


{!! Form::close() !!}

@stop