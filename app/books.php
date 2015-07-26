<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
		'book_id',
		'book_name',
		'img',
		'price'
	];
}
