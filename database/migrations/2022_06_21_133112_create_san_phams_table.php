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
            $table->string('hinhanh');
            $table->mediumText('mota');
            $table->foreignId('id_camera');
            $table->foreignId('id_manhinh');
            $table->foreignId('id_tinhnangdb');
            $table->foreignId('id_thietke');
            $table->foreignId('id_hieunangpin');
            $table->foreignId('id_hedieuhanh');
            $table->integer('danhgia')->nullable(true);;
            $table->foreignId('id_loaisp');
            $table->boolean('noibat')->nullable(true);
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
        Schema::dropIfExists('san_phams');
    }
}