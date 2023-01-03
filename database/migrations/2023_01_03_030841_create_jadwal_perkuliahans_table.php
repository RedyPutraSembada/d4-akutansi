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
        Schema::create('jadwal_perkuliahans', function (Blueprint $table) {
            $table->id();
            $table->string('judul_atas');
            $table->text('penjelasan');
            $table->text('mengikuti_revisi');
            $table->string('judul_tengah');
            $table->text('catatan_bawah');
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
        Schema::dropIfExists('jadwal_perkuliahans');
    }
};
