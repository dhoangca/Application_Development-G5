<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerModel extends Model
{
    use HasFactory;

    protected $table = "trainers"; 

    protected $primaryKey = 'trainerId';

    protected $fillable = [
        'fname',
        'lname',
        'age',
        'image',
        'telephone',
        'email',
        'date_of_birth',
        'type',
        'working_place',
        'address',
        'about',
    ];

    public function users()
    {
        return $this->belongsToMany(UserModel::class, 'user_trainer', 'trainerId', 'id')->withTimestamps();
    }

    public function topics()
    {
        return $this->belongsToMany(TopicModel::class, 'topic_trainers', 'trainerId', 'topicId');
    }
}
