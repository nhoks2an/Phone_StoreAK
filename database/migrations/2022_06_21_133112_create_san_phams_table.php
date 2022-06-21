<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id();
            $table->string('tensanpham');
            $table->string('mota');
            $table->integer('giacu');
            $table->integer('giamoi');
            $table->foreignId('id_camera');
            $table->foreignId('id_ram');
            $table->foreignId('id_rom');
            $table->foreignId('id_manhinh');
            $table->foreignId('id_tinhnangdb');
            $table->foreignId('id_thietke');
            $table->foreignId('id_hieunangpin');
            $table->foreignId('id_mau');
            $table->foreignId('id_hedieuhanh');
            $table->foreignId('id_danhgia');
            $table->integer('soluong');
            $table->foreignId('id_loaisp');
            $table->string('trangthai');
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
        Schema::dropIfExists('san_phams');
    }
}
