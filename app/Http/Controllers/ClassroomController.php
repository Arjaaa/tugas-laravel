<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::all(); 
        return view('classroom', [
            'title' => 'Classroom', 
            'classroom' => $classroom
        ]);
    }
}