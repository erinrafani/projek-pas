<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSopirTable extends Migration
{

    public function up()
    {
        Schema::create('sopir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sopir');
            $table->string('status_sopir');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sopir');
    }
}
