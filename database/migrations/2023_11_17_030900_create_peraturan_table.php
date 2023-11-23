<?php

use App\Models\Peraturan;
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
        Schema::dropIfExists('peraturan');
        Schema::create('peraturan', function (Blueprint $table) {
            $table->integerIncrements('Kode_Aturan');
            $table->char('Nama_Aturan', 50);
            $table->smallInteger('Poin')->default(10);
        });

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Peraturan::create([
                'Nama_Aturan' => $faker->sentence(1, true),
                'Poin' => $faker->numberBetween(1, 100),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan');
    }
};
