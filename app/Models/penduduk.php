<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'alamat',
        'gender',
    ];
    use HasFactory;
}
