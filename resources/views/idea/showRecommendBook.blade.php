@extends('app')

@section('content')

<h1>Recommend Books!</h1>

@foreach ($books as $book)
	<img src="{{$book->img}}" width="200" height="120"><br>
	id:{{$book->book_id}}<br>
	name:{{$book->book_name}}<br>
	price:{{$book->price}}<br>
<a href="{{action('IdeaController@bookDetails',[$book->book_id])}}">Book Details!</a>
	<br><br>

@endforeach

@stop

