<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'NIS';
    public $incrementing = false;

    protected $fillable = 
    [
        'NIS',
        'Nama',
        'Kelas',
        'Jurusan',
        'TA',
    ];
}