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
        Schema::dropIfExists('laporan');
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();

            $table->char('NIS', 12);
            $table->foreign('NIS')->references('NIS')->on('students')->cascadeOnUpdate()->cascadeOnDelete();

            $table->char('NIP', 10);
            $table->foreign('NIP')->references('NIP')->on('pengawas')->cascadeOnUpdate()->cascadeOnDelete();

            $table->unsignedInteger('Kode_Aturan');
            $table->foreign('Kode_Aturan')->references('Kode_Aturan')->on('peraturan')->cascadeOnUpdate()->cascadeOnDelete();

            $table->char('Kelas', 5);
            $table->char('TA', 10);
            $table->char('Alasan', 50);
            // $table->char('Waktu', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
