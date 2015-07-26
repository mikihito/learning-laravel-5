<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertBooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('books')->insert(array(
            'book_id' => '1',
            'book_name' => 'よくわかる Laravel5!',
            'price' => '1000',
            'img' => '1.jpg'
        ));
        DB::table('books')->insert(array(
            'book_id' => '2',
            'book_name' => 'よくわかる PHP',
            'price' => '1000',
            'img' => '2.jpg'
        ));
        DB::table('books')->insert(array(
            'book_id' => '3',
            'book_name' => 'よくわかる Git',
            'price' => '1000',
            'img' => '3.jpg'
        ));
        DB::table('books')->insert(array(
            'book_id' => '4',
            'book_name' => 'よくわかる GitHub',
            'price' => '1000',
            'img' => '4.jpg'
        ));
        DB::table('books')->insert(array(
            'book_id' => '5',
            'book_name' => 'よくわかる Java',
            'price' => '1000',
            'img' => '5.jpg'
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
