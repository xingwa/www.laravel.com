<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class XingwaContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('content', function(Blueprint $table){
            $table->increments('id')->comment('ID');
            $table->integer('column')->default(0)->comment('栏目ID');
            $table->integer('channel')->default(0)->comment('频道ID');
            $table->string('title',150)->comment('标题');
            $table->longText('content')->comment('内容');
        });
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
