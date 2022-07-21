<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenilaians extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('administrasi_id');
            $table->unsignedBigInteger('juri_id')->nullable();
            $table->string('nilai_administrasi')->nullable();
            $table->string('nilai_testulis')->nullable();
            $table->string('nilai_wawancara')->nullable();
            $table->string('nilai_karantina')->nullable();
            $table->string('nilai_speech')->nullable();
            $table->string('nilai_tanyajawab')->nullable();
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
        Schema::dropIfExists('penilaians');
    }
}
