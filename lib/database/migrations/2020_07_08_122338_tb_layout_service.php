<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbLayoutService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_layout_service', function (Blueprint $table) {
            $table->increments('service_id');
            
            $table->string('service_title_en')->nullable(true);
            $table->string('service_title_zh')->nullable(true);
            $table->string('service_title_ja')->nullable(true);

            $table->text('service_des_en')->nullable(true);
            $table->text('service_des_zh')->nullable(true);
            $table->text('service_des_ja')->nullable(true);

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
        Schema::dropIfExists('tb_layout_service');
    }
}
