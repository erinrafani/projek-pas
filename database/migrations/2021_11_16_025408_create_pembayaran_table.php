<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_booking')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->integer('dp');
            $table->integer('kekurangan');
            $table->string('status');

            // fk
            $table->foreign('id_booking')->references('id')
            ->on('booking')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('id_user')->references('id')
            ->on('user')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
