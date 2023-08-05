<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = "topics"; 
    protected $primaryKey = 'topicId';

    public function course()
    {
        return $this->belongsTo(Course::class, 'courseId', 'courseId');
    }
    protected $fillable = [
        'name',
        'description',
        'courseId',
        'created_at',
        'updated_at',
    ];
}
