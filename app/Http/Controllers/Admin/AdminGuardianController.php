<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
public function index(Request $request)
{
    $search = $request->search;

    $guardian = Guardian::when($search, function ($query) use ($search) {
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('job', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString();

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
