<?php

namespace App\Http\Controllers\Manages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TopicModel;
use App\Models\TrainerModel;

class TopicTrainerController extends Controller
{
    public function assignTrainerForm()
    {
        $topics = TopicModel::all();
        $trainers = TrainerModel::all();

        return view('Assign.assign_trainer_to_topic', compact('topics', 'trainers'));
    }

    public function assignTrainerToTopic(Request $request)
    {
        $request->validate([
            'topicId' => 'required|exists:topics,topicId',
            'trainerId' => 'required|exists:trainers,trainerId',
        ]);

        $topic = TopicModel::find($request->topicId);
        $trainer = TrainerModel::find($request->trainerId);
        // dd ($topic, $trainer );

        if ($topic && $trainer) {
            $topic->trainers()->attach([$trainer->trainerId]);
            // $trainer->topics()->attach([$topic->topicId]);
            return redirect()->route('Assign.assignTrainerForm')->with('success', 'Trainer assigned to topic successfully.');
        } else {
            return redirect()->route('Assign.assignTrainerForm')->with('success', 'Topic or Trainer not found.');
        }
    }
}
