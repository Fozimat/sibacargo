<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifElektronik extends Model
{
    use HasFactory;

    protected $table = 'tarif_elektronik';
    protected $guarded = [''];

    public function daerahAsal()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_asal', 'id');
    }

    public function daerahTujuan()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_tujuan', 'id');
    }

    public function servis()
    {
        return $this->belongsTo(Servis::class, 'servis', 'id');
    }
}
