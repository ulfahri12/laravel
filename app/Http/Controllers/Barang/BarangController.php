<?php

namespace App\Http\Controllers\Barang;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('kategori')->get();
        $data = [
            'title'=> 'Barang',
            'menu' => 'Barang',
            'submenu' => 'Home',
            'page' => 'barang.index',
            'barangs' => $barangs
        ];
        return view('template', $data);
    }

    public function tambah()
    {
        $barangs = Barang::all();
        $kategori = Kategori::all();
        $data = [
            'title'=> 'Barang',
            'menu' => 'Barang',
            'submenu' => 'Home',
            'page' => 'barang.tambah',
            'barangs' => $barangs,
            'kategori' => $kategori
        ];
        return view('template', $data);
    }
    
}
