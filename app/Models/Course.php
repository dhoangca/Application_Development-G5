<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    use HasFactory;
    protected $table = "courses"; 
    protected $primaryKey = 'courseId';

    public function categories()
    {
        return $this->belongsTo(CourseCategory::class, 'categoryId', 'categoryId');
    }
    protected $fillable = [
        'name',
        'description',
        'categoryId',
        'created_at',
        'updated_at',
    ];
}