<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee;

class TraineeController extends Controller
{
    public function index()
    {
        // Fetch all trainees from the database
        $trainees = Trainee::all();

        // Pass the trainees to the view
        return view('users.indexTstaff', compact('trainees'));
    }

    public function create()
    {
        return view('users.createTstaff');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'education' => 'required',
            'toeic_score' => 'required',
            'majors' => 'required',
        ]);

        // Create a new trainee
        Trainee::create($validatedData);

        return redirect()->route('users.indexTstaff')->with('success', 'Trainee created successfully');
    }

    public function edit(Trainee $trainee)
    {
        return view('users.editTstaff', compact('trainee'));
    }

    public function update(Request $request, Trainee $trainee)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'telephone' => 'required',
            'address' => 'required',
            'education' => 'required',
            'toeic_score' => 'required',
            'majors' => 'required',
        ]);

        // Update the trainee
        $trainee->update($validatedData);

        return redirect()->route('users.indexTstaff')->with('success', 'Trainee updated successfully');
    }

    public function destroy(Trainee $trainee)
    {
        $trainee->delete();

        return redirect()->route('users.indexTstaff')->with('success', 'Trainee deleted successfully');
    }
}
