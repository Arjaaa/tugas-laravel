<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    public function index()
    {
        $guardian = Guardian::paginate(10);


        return view('Admin.guardian.guardian', [
            'title' => 'Guardian List',
            'guardian' => $guardian
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'email' => 'required|email|unique:guardians,email',
            'address' => 'required|string|max:255',
        ]);

        Guardian::create($request->all());

        return redirect()->route('admin.guardian.index')->with('success', 'Guardian added successfully!');
    }

    public function update(Request $request, Guardian $guardian)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'email' => 'required|email|unique:guardians,email,' . $guardian->id,
            'address' => 'required|string|max:255',
        ]);

        $guardian->update($request->all());

        return redirect()->route('admin.guardian.index')->with('success', 'Guardian updated successfully!');
    }

    public function destroy(Guardian $guardian)
    {
        $guardian->delete();

        return redirect()->route('admin.guardian.index')->with('success', 'Guardian deleted successfully!');
    }
}
