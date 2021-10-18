<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProductcatLv2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_productcat_lv2', function (Blueprint $table) {
            $table->increments('procat2_id');
            $table->string('procat2_ten');
            $table->string('procat2_slug');
            $table->string('procat2_title');
            $table->string('procat2_description');
            $table->integer('procat2_procat_id');
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
        Schema::dropIfExists('tb_productcat_lv2');
    }
}
