<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProductLocation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_product_location', function (Blueprint $table) {
            $table->increments('locate_id');

            $table->string('locate_name_vi')->nullable(true);
            $table->string('locate_name_en')->nullable(true);
            $table->string('locate_name_zh')->nullable(true);
            $table->string('locate_name_ja')->nullable(true);

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
        Schema::dropIfExists('tb_product_location');
    }
}
