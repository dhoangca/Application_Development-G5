<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers'));
    }

    public function create()
    {
        return view('trainers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            // Add other validation rules for the rest of the fields
        ]);

        Trainer::create($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer profile created successfully!');
    }

    public function edit($id)
    {
        $trainer = Trainer::findOrFail($id);
        return view('trainers.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            // Add other validation rules for the rest of the fields
        ]);

        $trainer = Trainer::findOrFail($id);
        $trainer->update($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer profile updated successfully!');
    }

    public function destroy($id)
    {
        $trainer = Trainer::findOrFail($id);
        $trainer->delete();

        return redirect()->route('trainers.index')->with('success', 'Trainer profile deleted successfully!');
    }
}
