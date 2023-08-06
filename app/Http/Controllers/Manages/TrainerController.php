<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrainerModel;
use Illuminate\Support\Facades\Storage;

class TrainerController extends Controller
{
    public function index()
    {
        $trainers = TrainerModel::all();
        return view('trainees.indexTrainer', compact('trainers'));
    }

    public function create()
    {
        return view('trainees.createTrainer');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'fname' => 'required|string|max:255',
        //     'lname' => 'required|string|max:255',
        //     'age' => 'required|integer|max:255',
        //     'telephone' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     // Add email validation
        //     'date_of_birth' => 'required|date|max:255',
        //     'type' => 'required|string|max:255',
        //     'working_place' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'about' => 'required|string|max:255',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imagePath = $request->file('image')->store('trainers', 'public');

        // $trainer = new TrainerModel([
        //     'fname' => $request->input('fname'),
        //     'lname' => $request->input('lname'),
        //     'age' => $request->input('age'),
        //     'telephone' => $request->input('telephone'),
        //     'email' => $request->input('email'),
        //     'date_of_birth' => $request->input('date_of_birth'),
        //     'type' => $request->input('type'),
        //     'working_place' => $request->input('working_place'),
        //     'address' => $request->input('address'),
        //     'about' => $request->input('about'),
        //     'image' => $imagePath,
        // ]);

        // $trainer->save();

        $trainer = new TrainerModel;

        $trainer->fname = $request->fname;

        $trainer->lname = $request->lname;

        $trainer->age = $request->age;

        $trainer->telephone = $request->telephone;

        $trainer->email = $request->email;

        $trainer->date_of_birth = $request->date_of_birth;

        $trainer->type = $request->type;

        $trainer->working_place = $request->working_place;

        $trainer->address = $request->address;
        
        $trainer->about = $request->about;

        $trainer->image = $request->image;

        $trainer->save();

        return redirect()->route('managetrainer.trainers.index')->with('success', 'Trainer profile created successfully!');
    }


    //
    public function edit(TrainerModel $trainer)
    {
        return view('trainees.editTrainer', compact('trainer'));
    }

    public function update(Request $request, $trainerId)
    {

        $trainer = TrainerModel::find($trainerId);

        $trainer->fname = $request->fname;
        $trainer->lname = $request->lname;
        $trainer->age = $request->age;
        $trainer->telephone = $request->telephone;
        $trainer->email = $request->email;
        $trainer->date_of_birth = $request->date_of_birth;
        $trainer->type = $request->type;
        $trainer->working_place = $request->working_place;
        $trainer->address = $request->address;
        $trainer->about = $request->about;
    
        // Handle the image upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($trainer->image) {
                Storage::delete($trainer->image);
            }
    
            // Store the new image and get the file path
            $imagePath = $request->file('image')->store('trainers');
    
            // Update the image field in the trainer model
            $trainer->image = $imagePath;
        }
    
        $trainer->save();
    
        return redirect()->route('managetrainer.trainers.index')->with('success', 'Trainer profile updated successfully!');
    
    }

    public function destroy($id)
    {
        $trainer = TrainerModel::find($id);
        $trainer->delete();
        return redirect()->route('managetrainer.trainers.index')->with('success', 'Trainer profile deleted successfully!');
    }
}