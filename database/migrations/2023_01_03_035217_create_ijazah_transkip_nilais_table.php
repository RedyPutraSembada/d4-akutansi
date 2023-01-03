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
        Schema::create('ijazah_transkip_nilais', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi_tengah');
            $table->text('deskripsi_bawah');
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
        Schema::dropIfExists('ijazah_transkip_nilais');
    }
};
