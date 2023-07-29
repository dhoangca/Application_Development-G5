<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    protected $primaryKey = 'trainee_id';
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
    ];
}