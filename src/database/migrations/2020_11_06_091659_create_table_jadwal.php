<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbljadwal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kelas_id');
            $table->bigInteger('matakuliah_id');
            $table->string('nidn',8);
            $table->string('noruang',3);
            $table->enum('hari',['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu']);
            $table->enum('sesi',['I', 'II']);
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
        Schema::dropIfExists('tbljadwal');
    }
}
