<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbProjectMajor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_project_major', function (Blueprint $table) {
            $table->increments('major_id');
            
            $table->string('major_name_vi')->nullable(true);
            $table->string('major_name_en')->nullable(true);
            $table->string('major_name_zh')->nullable(true);
            $table->string('major_name_ja')->nullable(true);
            
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
        Schema::dropIfExists('tb_project_major');
    }
}
