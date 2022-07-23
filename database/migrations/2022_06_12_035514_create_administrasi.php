<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_id');
            $table->string('cv')->nullable();
            $table->string('foto_wajah')->nullable();
            $table->string('foto_body')->nullable();
            $table->string('karya_tulis')->nullable();
            $table->string('sk_domisili')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('sk_sehat')->nullable();
            $table->string('kta')->nullable();
            $table->enum('status',['lolos', 'tidaklolos'])->nullable();
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
        Schema::dropIfExists('administrasis');
    }

    
}
