<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    public $fillable = ['title', 'description'];

    public function workouts()
    {
        return $this->hasMany(LessonWorkout::class);
    }
    public function students()
    {
        return $this->hasMany(LessonStudent::class);
    }

    public function studentWorkouts()
    {
        return $this->hasMany(StudentWorkout::class);
    }

}
