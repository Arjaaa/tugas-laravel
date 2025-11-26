<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('Admin.teacher.teacher', [
            'title' => 'Teacher List',
            'teachers' => $teachers,
            'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'subject_name' => 'required',
            'subject_description' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // Buat subject baru
        $subject = Subject::create([
            'name' => $request->subject_name,
            'description' => $request->subject_description,
        ]);

        // Buat teacher
        Teacher::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'subject_id' => $subject->id,
        ]);

        return redirect()->back()->with('success', 'Teacher dan Subject berhasil ditambahkan!');
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'subject_name' => 'required',
            'subject_description' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        // Update teacher
        $teacher->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        // Update subject yang terkait
        $teacher->subject->update([
            'name' => $request->subject_name,
            'description' => $request->subject_description,
        ]);

        return redirect()->back()->with('success', 'Teacher & Subject berhasil diperbarui!');
    }

    public function destroy(Teacher $teacher)
    {
            if ($teacher->subject) {
        $teacher->subject->delete();
    }

        $teacher->delete();
        return redirect()->back()->with('success', 'Teacher berhasil dihapus!');
    }
}
