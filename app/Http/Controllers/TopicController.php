<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Course;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('trainees.indexTopic', compact('topics'));
    }
    
    public function create()
    {
        $courses = Course::all();
        return view('trainees.createTopic', compact('courses'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'courseId' => 'required|exists:courses,courseId',
        ]);
    
        Topic::create($request->all());
    
        return redirect()->route('MngTopic.topics.index')->with('success', 'Topic created successfully!');
    }
    


    
    public function edit($id)
    {
        $topic = Topic::findOrFail($id);
        $courses = Course::all();
        return view('trainees.editTopic', compact('topic', 'courses'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'courseId' => 'required|exists:courses,courseId',
        ]);
    
        $topic = Topic::findOrFail($id);
        $topic->update($request->all());
    
        return redirect()->route('MngTopic.topics.index')->with('success', 'Topic updated successfully!');
    }
    
    public function destroy($id)
    {
        $topic = Topic::findOrFail($id);
        $topic->delete();
    
        return redirect()->route('MngTopic.topics.index')->with('success', 'Topic deleted successfully!');
    }
}

