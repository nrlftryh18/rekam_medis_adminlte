<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table='pasiens';
    protected $fillable = [
        'nama',
        'alamat',
        'usia',
        'no_hp',
        'riwayat_medis',
        'keluhan'
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
