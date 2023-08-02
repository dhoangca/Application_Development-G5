<?php

// app/Http/Controllers/CoursesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('trainees.indexCourse', compact('courses'));
    }

    public function create()
    {
        return view('trainees.createCourse');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'categoryId' => 'required|exists:course_categories,categoryId',
        ]);

        Course::create($request->all());

        return redirect()->route('manageCourse.courses.index')
                         ->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('trainees.editCourse', compact('course'));
    }

    // public function update(Request $request, $update)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'category_id' => 'required|exists:course_categories,id',
    //     ]);

    //     $course = Course::findOrFail($id);
    //     $course->update($request->all());

    //     return redirect()->route('courses.index')
    //                      ->with('success', 'Course updated successfully.');
    // }
    public function update(Request $request, $courseId)
    {

        $course = Course::find($courseId);

        $course->name = $request->name;

        $course->description = $request->description;

        $course->categoryId = $request->categoryId;

        $course->save();

        return redirect()->route('manageCourse.courses.index')->with('success', 'Course updated successfully.');

    }


    // public function delete($id)
    // {
    //     $course = Course::findOrFail($id);
    //     $course->delete();

    //     return redirect()->route('courses.index')
    //                      ->with('success', 'Course deleted successfully.');
    // }

    public function delete($courseId)
    {

        $course = Course::find($courseId);

        $course->delete();

        return back();
    }
}
