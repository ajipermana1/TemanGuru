<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanMatpelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan_matpel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jurusan_id');
            $table->foreignId('matpel_id');
    
            $table->timestamps();
    
            $table->foreign('jurusan_id')->references('id')->on('jurusans');
            $table->foreign('matpel_id')->references('id')->on('matpels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan_matpel');
    }
}
