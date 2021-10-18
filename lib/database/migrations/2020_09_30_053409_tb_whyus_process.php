<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbWhyusProcess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_whyus_process', function (Blueprint $table) {
            $table->increments('whyus_process_id');
            
            $table->string('whyus_process_title_vi')->nullable(true);
            $table->string('whyus_process_title_en')->nullable(true);
            $table->string('whyus_process_title_zh')->nullable(true);
            $table->string('whyus_process_title_ja')->nullable(true);

            $table->string('whyus_process_thumb')->nullable(true);
            
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
        Schema::dropIfExists('tb_whyus_process');

    }
}
