<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'NIS' => '543221070',
            'Nama' => 'Muhammad Islahuddin Noor',
            'Kelas' => 'XI',
            'Jurusan' => 'RPL',
            'TA' => '2023'
        ]);
    }
}
