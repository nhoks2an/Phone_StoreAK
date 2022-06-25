<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfksp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            $table->foreign('id_mau')->references('id')->on('mau_sacs');
            $table->foreign('id_loaisp')->references('id')->on('loai_san_phams');
            $table->foreign('id_ram')->references('id')->on('r_a_m_s');
            $table->foreign('id_rom')->references('id')->on('r_o_m_s');
            $table->foreign('id_manhinh')->references('id')->on('man_hinhs');
            $table->foreign('id_tinhnangdb')->references('id')->on('tinh_nang_d_b_s');
            $table->foreign('id_camera')->references('id')->on('cameras');
            $table->foreign('id_hieunangpin')->references('id')->on('hieu_nang_pins');
            $table->foreign('id_hedieuhanh')->references('id')->on('he_dieu_hanhs');
            // $table->foreign('id_danhgia')->references('id')->on('danh_gias');
            $table->foreign('id_thietke')->references('id')->on('thiet_kes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            //
        });
    }
}
