<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kustomer extends Model
{
    use HasFactory;
    protected $table = 'kustomer';
    protected $guarded = [];

    public function kabupatenKota()
    {
        return $this->belongsTo(KabupatenKota::class);
    }
}
