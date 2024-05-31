<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentWorkout extends Model
{
    use HasFactory;
    protected $fillable = ['student_id', 'workout_id', 'lesson_id'];

    public function workout() :LessonWorkout
    {
        return $this->belongsTo(LessonWorkout::class);
    }
}
