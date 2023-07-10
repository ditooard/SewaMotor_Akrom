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
        Schema::table('sewa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_motor')->after('id');
            $table->foreign('id_motor')->references('id')->on('motors');
            $table->unsignedBigInteger('id_customer')->after('id_motor');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->enum('status_sewa',['Ditolak', 'Booking', 'Sewa', 'Kembali']);
            $table->date('tanggal_kembali')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sewa', function (Blueprint $table) {
            $table->dropForeign('sewa_id_motor_foreign');
            $table->dropForeign('sewa_id_customer_foreign');
            $table->dropColumn('id_customer');
            $table->dropColumn('id_motor');
            $table->dropColumn('status_sewa');
            $table->dropColumn('tanggal_kembali');
        });
    }
};
