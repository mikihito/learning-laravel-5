<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $fillable = [
    	'teacher_id',
    	'teacher_name',
    	'img',
    	'teacher_prof'
    ];
}
