<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createfkhoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hoa_dons', function (Blueprint $table) {
            $table->foreign('id_voucher')->references('id')->on('vouchers');
            $table->foreign('id_kh')->references('id')->on('users');
            $table->foreign('id_thanhpho')->references('id')->on('thanh_phos');
            $table->foreign('id_quan')->references('id')->on('quans');
            $table->foreign('id_phuong')->references('id')->on('phuongs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hoa_dons', function (Blueprint $table) {
            //
        });
    }
}
