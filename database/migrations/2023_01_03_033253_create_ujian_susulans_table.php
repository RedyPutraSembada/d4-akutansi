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
        Schema::create('ujian_susulans', function (Blueprint $table) {
            $table->id();
            $table->string('jduul');
            $table->text('deskripsi');
            $table->string('img');
            $table->string('title_table');
            $table->string('shift');
            $table->string('tgl_pendaftaran');
            $table->string('ruang_pelaksanaan');
            $table->string('tgl_pelaksanaan');
            $table->string('jam_pelaksanaan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ujian_susulans');
    }
};
