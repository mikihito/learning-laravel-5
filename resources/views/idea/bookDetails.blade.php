@extends('app')

@section('content')

<h1>Book Details</h1>


@foreach ($bookDetails as $bookDetail)

<img src="" width="200" height="120"><br>
img_url:  {{$bookDetail->img}}<br>
book_id:  {{$bookDetail->book_id}}<br>
book_name:  {{$bookDetail->book_name}}<br>
price:  {{$bookDetail->price}}<br>
created_at:  {{$bookDetail->created_at}}<br>
update_at:  {{$bookDetail->updated_at}}<br><br>

@endforeach

@stop