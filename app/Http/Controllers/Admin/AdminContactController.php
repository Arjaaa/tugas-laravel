<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index()
    {
        return view('components.admin.kontak', [
            'title' => 'Kontak Admin',
            'email' => 'bahlilethanol@gmail.com',
            'instagram' => '@bahlil',
            'whatsapp' => '+62 812-3456-7890'
        ]);
    }
}
