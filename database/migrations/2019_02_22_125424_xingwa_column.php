<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class XingwaColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('column', function(Blueprint $table){
            $table->increments('id')->comment('ID');
            $table->integer('pid')->default(0)->comment('父级ID');
            $table->tinyInteger('is_channel')->default(0)->comment('是否是频道：0、不是  1、是');
            $table->string('name',50)->comment('栏目或频道名称');
            $table->string('path',100)->comment('栏目或频道路径');
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
