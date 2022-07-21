<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tgl_lahir');
            $table->enum('jenis_kelamin', ['Perempuan','Laki-laki']);
            $table->string('no_hp');
            $table->string('email');
            $table->string('instansi');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['ADMIN', 'KEPALADINAS', 'JURI', 'PESERTA']);
            $table->longText('hak_akses')->nullable();
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
        Schema::dropIfExists('users');
    }
}
