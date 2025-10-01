<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = [
        //     ['id' => 1,'name' => 'Aldestha Nendrayanto', 'email' => 'nendra@gmail.com', 'address' => 'Gribig', 'kelas' => '11 PPLG 1'],
        //     ['id' => 2,'name' => 'Aldikky Arfian Susanto', 'email' => 'dikky@gmail.com', 'address' => 'Kudus', 'kelas' => '11 PPLG 1'],
        //     ['id' => 3,'name' => 'Alfian Fadhil Pradana', 'email' => 'fadhil@example.com', 'address' => 'Kudus', 'kelas' => '11 PPLG 1'],
        //     ['id' => 4,'name' => 'Almira Natahania', 'email' => 'mira@gmail.com', 'address' => 'Kudus', 'kelas' => '11 PPLG 1'],
        //     ['id' => 5,'name' => 'Arza Armandhito', 'email' => 'arza@gmail.com', 'address' => 'Kudus', 'kelas' => '11 PPLG 1'],
        // ];

        $student = Student::all();
        return view('student', ['title' => 'Student', 'student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
