<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koperasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_koperasi');
            $table->string('arsip_pendirian');
            $table->string('arsip_pad_1')->nullable();
            $table->string('arsip_pad_2')->nullable();
            $table->string('arsip_pad_3')->nullable();
            $table->foreignId('id_kotakab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koperasi');
    }
};
