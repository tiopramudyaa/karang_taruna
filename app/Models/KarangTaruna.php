<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarangTaruna extends Model
{
    use HasFactory;

    protected $table = 'karang_taruna';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'visi',
        'misi',
        'logo',
        'background',
        'alamat',
        'email',
        'telp',
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }

    public function programKerja()
    {
        return $this->hasMany(ProgramKerja::class);
    }
}
