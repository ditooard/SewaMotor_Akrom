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
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe_sewa', ['Premium', 'Spesial']);
            $table->string('tipe_kendaraan');
            $table->integer('harga_sewa')->length(255);
            $table->string('plat_nomor');
            $table->text('spesifikasi');
            $table->text('foto_kendaraan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
};
