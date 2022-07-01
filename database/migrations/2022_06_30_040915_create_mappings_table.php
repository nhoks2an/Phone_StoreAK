<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mappings', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('id_sanpham');
            $table->foreignId('id_mau');
            $table->foreignId('id_ram');
            $table->foreignId('id_rom');
            $table->foreignId('soluong');
            $table->double('giacu')->nullable(true);
            $table->double('giamoi');
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
        Schema::dropIfExists('mappings');
    }
}