<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAbsensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblabsensi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jadwal_id');
            $table->string('nim',11);
            $table->date('tanggal');
            $table->enum('status',['h', 'a', 'i', 's']);
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
        Schema::dropIfExists('tblabsensi');
    }
}
