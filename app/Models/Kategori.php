<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'artikel_kategori';
    protected $fillable = ['nama_kategori'];

    public function postingan()
    {
        return $this->hasMany(Postingan::class, 'id_kategori', 'id');
    }
}
