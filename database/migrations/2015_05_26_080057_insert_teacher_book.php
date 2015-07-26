<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertTeacherBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '10',
            'book_id' => '1'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '10',
            'book_id' => '2'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '10',
            'book_id' => '3'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '20',
            'book_id' => '3'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '20',
            'book_id' => '4'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '30',
            'book_id' => '2'
        ));
        DB::table('teacher_book')->insert(array(
            'teacher_id' => '30',
            'book_id' => '5'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
