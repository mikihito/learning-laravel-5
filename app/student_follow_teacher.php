<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class student_follow_teacher extends Model
{
		protected $table = 'student_follow_teacher';
    	 protected $fillable = [
		'student_id',
		'teacher_id',
	];
    
}
