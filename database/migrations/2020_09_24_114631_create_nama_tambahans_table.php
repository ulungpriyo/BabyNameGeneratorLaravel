<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaTambahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nama_tambahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('asal_nama');
            $table->string('personality');
            $table->string('jenis_kelamin');
            $table->string('arti_nama');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nama_tambahans');
    }
}
