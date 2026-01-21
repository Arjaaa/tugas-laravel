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
            'nama' => 'Arza Armandhito',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK Raden Umar Said'
        ]);
    }
}
