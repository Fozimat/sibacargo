<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MTC extends Model
{
    use HasFactory;

    protected $table = 'mtc';
    protected $guarded = [];
    protected $dates   = ['tanggal_update', 'tanggal_jalan'];

    protected $casts = [
        'tanggal_update'  => 'date:d-m-Y',
        'tanggal_jalan' => 'date:d-m-Y',
    ];

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->getTimestamp();
    }

    public function status_manifest()
    {
        return $this->belongsTo(StatusBarang::class, 'status_manifes', 'id');
    }
}
