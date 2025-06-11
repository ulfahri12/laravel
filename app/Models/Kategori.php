<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    
    protected $table = 'tabel_kategori';
    
    protected $fillable = [
        'kode_kategori',
        'nama_kategori'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}
