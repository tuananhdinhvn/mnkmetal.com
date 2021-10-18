<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_image', function (Blueprint $table) {
            $table->increments('img_id');
            $table->string('img_src');
            $table->string('img_title')->nullable(true);
            $table->string('img_description')->nullable(true);
            $table->string('img_link')->nullable(true);
            $table->string('img_type')->nullable(true);
            $table->boolean('img_show')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_image');
    }
}
