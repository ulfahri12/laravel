<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $table = 'tabel_barang';
    protected $fillable = [
        'kode',
        'nama',
        'merk',
        'kategori_id',
        'satuan',
        'stok_awal',
        'harga_beli',
        'harga_jual',
        'keterangan',
        // 'created_at' dan 'updated_at' biasanya tidak perlu dimasukkan ke fillable
        // karena sudah otomatis dihandle oleh Eloquent
    ];

    /**
     * The attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'stok_awal' => 'integer',
            'harga_beli' => 'decimal:2',
            'harga_jual' => 'decimal:2',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<string>
     */
    protected $hidden = [
        // Masukkan field yang ingin disembunyikan saat di-convert ke array/JSON
    ];
}
