<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKapal extends Model
{
    use HasFactory;
    protected $table = 'jadwal_kapal';
    protected $guarded = [];
    protected $dates   = ['tgl_closing', 'tgl_berangkat'];

    public function ruteKapal()
    {
        return $this->belongsTo(RuteKapal::class, 'rute_kapal_id');
    }
}
