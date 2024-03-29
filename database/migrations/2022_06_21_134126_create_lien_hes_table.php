<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLienHesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lien_hes', function (Blueprint $table) {
            $table->id();
            $table->string('hoten');
            $table->string('email');
            $table->string('sodienthoai');
            $table->mediumText('noidung')->nullable(true);
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
        Schema::dropIfExists('lien_hes');
    }
}