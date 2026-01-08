<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('components.admin.profil', [
            'title' => 'Profil Admin',
            'nama' => 'bahlil',
            'kelas' => 'XI PPLG 2',
            'sekolah' => 'SMK Raden Umar Said'
        ]);
    }
}
