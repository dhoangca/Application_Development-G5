<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trainee;
use App\Models\Course;

class TraineesCoursesController extends Controller
{
    public function assignTraineeForm()
    {
        $trainees = Trainee::all();
        $courses = Course::all();

        return view('Assign.assign_trainee_to_courses', compact('trainees', 'courses'));
    }

    public function assignTraineeToCourse(Request $request)
    {
        $request->validate([
            'traineeId' => 'required|exists:trainees,traineeId',
            'courseId' => 'required|exists:courses,courseId',
        ]);

        $trainees = Trainee::find($request->traineeId);
        $courses = Course::find($request->courseId);
        // dd ($topic, $trainer );

        if ($courses && $trainees) {
            $courses->trainees()->attach([$trainees->traineeId]);
            // $trainer->topics()->attach([$topic->topicId]);
            return redirect()->route('AssignC.assignTraineeForm')->with('success', 'Trainer assigned to topic successfully.');
        } else {
            return redirect()->route('AssignC.assignTraineeForm')->with('success', 'Topic or Trainer not found.');
        }
    }
}
