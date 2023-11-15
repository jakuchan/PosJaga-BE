<?php

use App\Models\Student;
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
        Schema::create('students', function (Blueprint $table) {
            $table->char('NIS', 12)->primary();
            $table->char('Nama', 50);
            $table->enum('Kelas', ['X', 'XI', 'XII']);
            $table->enum('Jurusan', ['TJAT', 'TKJ', 'RPL', 'DKV', 'ANM']);
            $table->char('TA', 10);
            $table->timestamps();
        });
        $faker = \faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Student::create([
                'NIS' => $faker->randomNumber(9, true),
                'Nama' => $faker->sentence(2, true),
                'Kelas' => $faker->randomElement(['X', 'XI', 'XII']),
                'Jurusan' => $faker->randomElement(['TJAT', 'TKJ', 'RPL', 'DKV', 'ANM']),
                'TA' => $faker->randomNumber(4, true),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
