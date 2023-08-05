<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseCategory;

class CourseCategoryController extends Controller
{
    public function index()
    {
        $categories = CourseCategory::all();
        return view('trainees.indexcoursecategories', compact('categories'));
    }

    public function create()
    {
        return view('trainees.createcoursecategories');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        CourseCategory::create($request->all());

        return redirect()->route('MNGCourseCategories.course-categories.index')->with('success', 'Course category created successfully!');
    }

    public function edit(CourseCategory $category)
    {
        return view('trainees.editcoursecategories', compact('category'));
    }

    public function update(Request $request, $categoryId)
    {

        $category = CourseCategory::find($categoryId);

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect()->route('MNGCourseCategories.course-categories.index')->with('success', 'Course category updated successfully!');
    }


    public function delete($categoryId)
    {

        $category = CourseCategory::find($categoryId);
        $category->delete();
        return back();
    }
}
