<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfkdanhgia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('danh_gias', function (Blueprint $table) {
            $table->foreign('id_kh')->references('id')->on('users');
            $table->foreign('id_hd')->references('id')->on('hoa_dons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('danh_gias', function (Blueprint $table) {
            //
        });
    }
}