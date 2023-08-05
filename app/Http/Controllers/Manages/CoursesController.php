<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('trainees.indexCourse', compact('courses'));
    }
    public function create()
    {
        $categories = CourseCategory::all();
        return view('trainees.createCourse', compact('categories'));
    }
    //

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
    //
    //
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $categories = CourseCategory::all();
        return view('trainees.editCourse', compact('course', 'categories'));
    }
    //
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'categoryId' => 'required|exists:course_categories,categoryId',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('manageCourse.courses.index')->with('success', 'Course updated successfully.');
    }
    public function delete($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('manageCourse.courses.index')->with('success', 'Course deleted successfully!');
    }
}