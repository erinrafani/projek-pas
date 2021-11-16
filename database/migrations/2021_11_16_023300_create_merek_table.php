<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerekTable extends Migration
{

    public function up()
    {
        Schema::create('merek', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('merek');
    }
}
