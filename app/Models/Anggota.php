<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    public $timestamps = false;

    protected $fillable = [
        'karang_taruna_id',
        'nama',
        'jabatan',
        'usia',
        'gambar'
    ];

    public function karangTaruna()
    {
        return $this->belongsTo(KarangTaruna::class);
    }
}
