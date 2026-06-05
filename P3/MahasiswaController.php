<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            [
                'nama'    => 'Andi Pratama',
                'jurusan' => 'Teknik Informatika',
            ],
            [
                'nama'    => 'Siti Rahayu',
                'jurusan' => 'Sistem Informasi',
            ],
            [
                'nama'    => 'Doni Kurniawan',
                'jurusan' => 'Teknik Komputer',
            ],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
