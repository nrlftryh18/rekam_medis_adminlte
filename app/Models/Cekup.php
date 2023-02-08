<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cekup extends Model
{
    use HasFactory;
    protected $table='cekups';
    protected $fillable = [
        'cervical',
        'thoraxal',
        'lumbar',
        'sacral',
        'pelvis',
        'plintiran',
        'kompresi',
        'type_veterbra',
        'type_thorax',
        'visual',
    ];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
}
