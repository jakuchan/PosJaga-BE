<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;
    protected $table = 'peraturan';
    protected $primaryKey = 'Kode_Aturan';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = 
    [
        'Kode_Aturan',
        'Nama_Aturan',
        'Poin',
    ];
}
