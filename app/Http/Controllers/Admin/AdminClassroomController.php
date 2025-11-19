<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::all();

        return view('Admin.classroom.classroom', [
            'title' => 'Classroom List',
            'classroom' => $classroom
        ]);
    }

    public function create()
    {
        return view('Admin.classroom.create', [
            'title' => 'Add Classroom'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Classroom::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.classroom.index')
            ->with('success', 'Classroom berhasil ditambahkan!');
    }
}
