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

    public function status_manifest()
    {
        return $this->belongsTo(StatusBarang::class, 'status_manifes', 'id');
    }
}
