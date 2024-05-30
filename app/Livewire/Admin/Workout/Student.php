<?php

namespace App\Livewire\Admin\Workout;

use App\Models\LessonWorkout;
use App\Models\StudentWorkout;
use Livewire\Component;

class Student extends Component
{
    public $lesson_id;
    public LessonWorkout $workout;

    public function mount(LessonWorkout $workout)
    {
        $this->workout = $workout;
    }

    public function render()
    {
        $studentWorkouts = StudentWorkout::where('workout_id', $this->workout->id)->get();
        return view('livewire.admin.workout.student', compact('studentWorkouts'));
    }
}
