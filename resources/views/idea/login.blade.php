@extends('app')

@section('content')

<h1>Login Window</h1>


<br>
@if (Session::get('login') == 'ok')

	<p>You are logged in</p>
	<br>

@else

	<p>You are not logged in</p>
	<p>Please Login!!</p>

@endif





<br><br>

{!! Form::open(['url'=>'checkLogin'])!!}

	{!! Form::label('student_id','ID:') !!}<br>
	{!! Form::text('student_id',null,['class' => 'form-control']) !!}<br>
<br>

	{!!	Form::label('pass','PassWord:') !!}<br>
	{!! Form::text('pass',null,['class' => 'form-control']) !!}
<br><br>
	{!! Form::submit('Login',['class' => 'btn btn-primary form-control']) !!}

{!! Form::close() !!}

<br>

@if (Session::get('login') == 'ok')
	<strong><a href="show/{{Session::get('student_id')}}">Following teachers</a></strong>
@endif



<br><br>

<a href="createAccount">Create Account</a>

<br><br>
<br><br>
<a href="logout">Logout</a>

<br><br>
<img src="learning-laravel-5/public/img/Back.jpg" width="220" height="110">

@stop