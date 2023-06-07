<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananSibacargo extends Model
{
    use HasFactory;
    protected $table   = 'pesanan_sibacargo';
    protected $guarded = [''];
    protected $dates   = ['waktu_pesan', 'tanggal_masuk'];

    protected $casts = [
        'waktu_pesan'  => 'date:d-m-Y',
        'tanggal_masuk' => 'date:d-m-Y',
    ];

    public function daerahAsal()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_asal', 'id');
    }

    public function daerahTujuan()
    {
        return $this->belongsTo(KabupatenKota::class, 'daerah_tujuan', 'id');
    }

    public function kustomer()
    {
        return $this->belongsTo(Kustomer::class);
    }
}
