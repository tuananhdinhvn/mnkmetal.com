<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbQna extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_qna', function (Blueprint $table) {
            $table->increments('qna_id');
            
            $table->string('qna_ques')->nullable(true);
            $table->string('qna_ques_en')->nullable(true);

            $table->text('qna_ans')->nullable(true);
            $table->text('qna_ans_en')->nullable(true);

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
        Schema::dropIfExists('tb_qna');
    }
}
