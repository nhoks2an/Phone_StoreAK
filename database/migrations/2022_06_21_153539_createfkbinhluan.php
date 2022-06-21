<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfkbinhluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('binh_luans', function (Blueprint $table) {
            $table->foreign('id_kh')->references('id')->on('users');
            $table->foreign('id_sp')->references('id')->on('san_phams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('binh_luans', function (Blueprint $table) {
            //
        });
    }
}
