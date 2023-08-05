<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerModel;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = TrainerModel::all();
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

        TrainerModel::create($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer profile created successfully!');
    }

    public function edit($id)
    {
        $trainer = TrainerModel::findOrFail($id);
        return view('trainers.edit', compact('trainer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            // Add other validation rules for the rest of the fields
        ]);

        $trainer = TrainerModel::findOrFail($id);
        $trainer->update($request->all());

        return redirect()->route('trainers.index')->with('success', 'Trainer profile updated successfully!');
    }

    public function destroy($id)
    {
        $trainer = TrainerModel::findOrFail($id);
        $trainer->delete();

        return redirect()->route('trainers.index')->with('success', 'Trainer profile deleted successfully!');
    }
}
