<?php

use App\Models\Pengawas;
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
        Schema::create('pengawas', function (Blueprint $table) {
            $table->char('NIP', 10)->primary();
            $table->char('Nama', 50);
            $table->enum('Status', ['Guru', 'Staff']);
            $table->timestamps();
        });

        $faker = \faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Pengawas::create([
                'NIP' => $faker->randomNumber(9, true),
                'Nama' => $faker->sentence(2, true),
                'Status' => $faker->randomElement(['Guru', 'Staff']),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawas');
    }
};
