<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicModel extends Model
{
    use HasFactory;

    protected $table = "topics"; 

    protected $primaryKey = 'topicId';

    protected $fillable = [
        'name',
        'description',
    ];
    public function trainers()
    {
        return $this->belongsToMany(TrainerModel::class, 'topic_trainers', 'trainerId', 'topicId');
    }
}
