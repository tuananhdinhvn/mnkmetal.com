<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_customer', function (Blueprint $table) {
            $table->increments('cust_id');
            $table->string('cust_ten');
            $table->string('cust_email');
            $table->string('cust_phone');
            $table->string('cust_diachi');
            $table->text('cust_noidung');
            $table->text('cust_ghichu');
            $table->tinyInteger('cust_phanloai');
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
        Schema::dropIfExists('tb_customer');
    }
}
