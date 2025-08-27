<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        return view('beranda');
    }

    public function profil() {
        $data = [
            'nama' => 'Arza Armandhito',   
            'kelas' => '11 PPLG 1',     
            'sekolah' => 'SMK Raden Umar Said Kudus'
        ];
        return view('profil', $data);
    }

    public function kontak() {
        return view('kontak');
    }
}
