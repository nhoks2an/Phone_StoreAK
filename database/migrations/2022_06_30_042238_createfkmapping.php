<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfkmapping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mappings', function (Blueprint $table) {
            $table->foreign('id_sanpham')->references('id')->on('san_phams');
            $table->foreign('id_ram')->references('id')->on('r_a_m_s');
            $table->foreign('id_rom')->references('id')->on('r_o_m_s');
            $table->foreign('id_mau')->references('id')->on('mau_sacs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mappings', function (Blueprint $table) {
            //
        });
    }
}