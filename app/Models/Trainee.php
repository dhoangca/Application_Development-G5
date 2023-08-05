<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;
    
    protected $table = "trainees"; 
    protected $primaryKey = 'traineeId';
    protected $fillable = [
        'name',
        'age',
        'date_of_birth',
        'email',
        'telephone',
        'address',
        'education',
        'toeic_score',
        'majors',
        'created_at',
        'updated_at',
    ];
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'trainee_course', 'traineeId', 'courseId');
    }
}