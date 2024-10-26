<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('profil_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->unique();
            $table->string('name')->unique(); // mengganti user_id dengan username
            $table->string('email')->unique()->nullable();
            $table->string('jurusan')->nullable();
            $table->string('prodi')->nullable();
            $table->enum('semester', ['1', '2', '3', '4', '5', '6']);
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('profil_mahasiswa');
    }
}