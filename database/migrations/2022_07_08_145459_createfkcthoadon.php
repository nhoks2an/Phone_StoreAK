<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfkcthoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('c_t_hoa_dons', function (Blueprint $table) {
            $table->foreign('id_sanpham')->references('id')->on('san_phams');
            $table->foreign('id_map')->references('id')->on('mappings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('c_t_hoa_dons', function (Blueprint $table) {
            //
        });
    }
}