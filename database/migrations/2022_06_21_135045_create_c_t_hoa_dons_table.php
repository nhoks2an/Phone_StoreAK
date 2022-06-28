<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_t_hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hoadon');
            $table->foreignId('id_sanpham');
            $table->integer('soluong');
            $table->integer('thanhtien');
            $table->boolean('hienthi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c_t_hoa_dons');
    }
}