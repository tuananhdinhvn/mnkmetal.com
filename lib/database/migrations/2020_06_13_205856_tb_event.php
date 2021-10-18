<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_event', function (Blueprint $table) {
            $table->increments('event_id');

            $table->string('event_ten')->nullable(true);
            $table->string('event_ten_en')->nullable(true);

            $table->string('event_thumb')->nullable(true);

            $table->text('event_des')->nullable(true);
            $table->text('event_des_en')->nullable(true);

            $table->integer('event_end_day')->nullable(true);
            $table->integer('event_end_month')->nullable(true);
            $table->integer('event_end_year')->nullable(true);

            $table->integer('event_end_hour')->nullable(true);
            $table->integer('event_end_min')->nullable(true);
            $table->integer('event_end_sec')->nullable(true);

            $table->boolean('event_show')->default(true);
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
        Schema::dropIfExists('tb_event');
    }
}
