<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{

    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_mobil')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_sopir')->unsigned();
            $table->date('tanggal_booking');
            $table->date('tanggal_kembali');
            $table->integer('denda');
            $table->string('durasi');
            $table->string('status');
            $table->integer('jumlah_bayar');
            $table->integer('jumlah_dp');

            // fk
            $table->foreign('id_mobil')->references('id')
            ->on('mobil')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_user')->references('id')
            ->on('user')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_sopir')->references('id')
            ->on('sopir')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
