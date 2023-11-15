<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tamu');
            $table->foreignId('petugas_checkin');
            $table->foreignId('petugas_checkout') ->nullable();
            $table->string('keperluan_tamu');
            $table->string('bertemu');
            $table->string('asal_instansi');
            $table->enum('jenis_kelamin',
            ['laki-laki', 'perempuan']);
            $table->bigInteger('telepon');
            $table->dateTime('tanggal_checkin');
            $table->dateTime('tanggal_checkout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
