<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifKendaraan extends Model
{
    use HasFactory;

    protected $table = 'tarif_sibacargo_kendaraan';
    protected $guarded = [''];

    public function daerahAsal()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_asal');
    }

    public function daerahTujuan()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_tujuan');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }
}
