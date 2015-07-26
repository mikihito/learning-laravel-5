<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher_book extends Model
{
    protected $fillable = [
	'teacher_id',
	'book_id'   
	];

	
}
