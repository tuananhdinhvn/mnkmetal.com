<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbNation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nation', function (Blueprint $table) {
            $table->increments('nation_id');
            
            $table->string('nation_name_vi')->nullable(true);
            $table->string('nation_name_en')->nullable(true);
            $table->string('nation_name_zh')->nullable(true);
            $table->string('nation_name_ja')->nullable(true);
            $table->string('nation_name_kr')->nullable(true);

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
        Schema::dropIfExists('tb_nation');
    }
}
