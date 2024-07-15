<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramKerja extends Model
{
    use HasFactory;

    protected $table = 'program_kerja';
    public $timestamps = false;

    protected $fillable = [
        'karang_taruna_id',
        'nama_proker',
        'ketua',
        'tanggal',
        'deskripsi',
        'gambar'
    ];

    public function karangTaruna()
    {
        return $this->belongsTo(KarangTaruna::class);
    }
}
