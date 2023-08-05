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

        if ($topic && $trainer) {
            $topic->trainers()->syncWithoutDetaching([$trainer->trainerId]);
            return response()->json(['message' => 'Trainer assigned to topic successfully'], 200);
        }else
        {
            return response()->json(['message' => 'Topic or Trainer not found'], 404);
        }
    }
}
