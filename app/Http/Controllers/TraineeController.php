<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trainee; // Assuming you have a Trainee model

class TraineeController extends Controller
{
    public function index()
    {
        $trainees = Trainee::all();

        return view('trainees.index', compact('trainees'));
    }
    public function create()
    {
        return view('trainees.create');
    }

    public function store(Request $request)
    {
        // Validate the input data here
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|unique:trainees',
            'telephone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'toeic_score' => 'required|string|max:20',
            'majors' => 'required|string|max:255',
        ]);

        Trainee::create($data);

        return redirect()->route('trainees.index')->with('success', 'Trainee account created successfully.');
    }

    public function edit(Trainee $trainee)
    {
        return view('trainees.edit', compact('trainee'));
    }

    // public function update(Request $request, $traineeId)
    // {
    //     // Validate the input data here
    //     $trainee = Trainee::find($traineeId);

    //     $data = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'age' => 'required|integer|min:18',
    //         'date_of_birth' => 'required|date',
    //         'email' => 'required|email|unique:trainees,email,',
    //         'telephone' => 'required|string|max:20',
    //         'address' => 'required|string|max:255',
    //         'education' => 'required|string|max:255',
    //         'toeic_score' => 'required|string|max:20',
    //         'majors' => 'required|string|max:255',
    //     ]);

    //     $trainee->update($data);



    //     return redirect()->route('trainees.index')->with('success', 'Trainee account updated successfully.');
    // }

    public function update(Request $request, $traineeId)
    {

        $trainee = Trainee::find($traineeId);

        $trainee->name = $request->name;

        $trainee->age = $request->age;

        $trainee->date_of_birth = $request->date_of_birth;

        $trainee->email = $request->email;

        $trainee->telephone = $request->telephone;

        $trainee->address = $request->address;

        $trainee->education = $request->education;

        $trainee->toeic_score = $request->toeic_score;

        $trainee->majors = $request->majors;

        $trainee->save();

        return redirect()->route('managetrainee.trainees.index')->with('success', 'Trainee account updated successfully.');

    }


    public function delete($traineeId)
    {

        $Trainee = Trainee::find($traineeId);

        $Trainee->delete();

        return back();
    }
}