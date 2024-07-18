<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarDokumentasi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'gambar_dokumentasi';

    protected $fillable = [
        'program_kerja_id',
        'path',
    ];

    public function programKerja()
    {
        return $this->belongsTo(ProgramKerja::class);
    }
}
