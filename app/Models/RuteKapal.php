<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuteKapal extends Model
{
    protected $table = 'rute_kapal';
    protected $guarded = [];
    use HasFactory;

    public function jadwalKapal()
    {
        return $this->hasMany(JadwalKapal::class, 'rute_kapal_id');
    }
}
