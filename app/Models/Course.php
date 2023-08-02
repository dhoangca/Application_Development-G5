<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses"; 
    protected $primaryKey = 'courseId';
    protected $fillable = [
        'courseId',
        'description',
        'categoryId',
        'created_at',
        'updated_at',
    ];
}