<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    // protected $primaryKey = 'NIP';
    public $incrementing = true;

    protected $fillable = 
    [
        'NIS',
        'NIP',
        'Kode_Aturan',
        'Kelas',
        'TA',
        'Alasan',
    ];
}
