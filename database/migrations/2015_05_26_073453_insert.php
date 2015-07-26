<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Insert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('teachers')->insert(array(
            'teacher_id' => '10',
            'teacher_name'=>'Morosawa',         
            'teacher_prof' => 'I am morosawa',
            'img' => '10.jpg'
        ));
        DB::table('teachers')->insert(array(
            'teacher_id' => '20',
            'teacher_name'=>'Inoue',         
            'teacher_prof' => 'I am Inoue',
            'img' => '20.jpg'
        ));
        DB::table('teachers')->insert(array(
            'teacher_id' => '30',
            'teacher_name'=>'Tanaka',         
            'teacher_prof' => 'I am Tanaka',
            'img' => '30.jpg'
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
