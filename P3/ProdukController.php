<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            [
                'nama_produk' => 'Laptop Asus VivoBook',
                'harga'       => 7500000,
            ],
            [
                'nama_produk' => 'Mouse Wireless Logitech',
                'harga'       => 250000,
            ],
            [
                'nama_produk' => 'Keyboard Mechanical',
                'harga'       => 450000,
            ],
        ];

        return view('produk', compact('produk'));
    }
}
