<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonWorkout extends Model
{
    use HasFactory;
    public $fillable = ['description', 'lesson_id'];
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

}
