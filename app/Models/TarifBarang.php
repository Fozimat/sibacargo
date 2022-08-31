<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifBarang extends Model
{
    use HasFactory;

    protected $table = 'tarif_sibacargo_barang';
    protected $guarded = [''];

    public function daerahAsal()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_asal');
    }

    public function daerahTujuan()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_tujuan');
    }
}
