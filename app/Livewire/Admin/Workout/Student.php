<?php

namespace App\Livewire\Admin\Workout;

use App\Models\LessonWorkout;
use App\Models\StudentWorkout;
use Livewire\Component;

class Student extends Component
{
    public LessonWorkout $workout;

    public function mount(LessonWorkout $workout_id)
    {
        $this->workout = $workout_id;
    }

    public function render()
    {
        $studentWorkouts = StudentWorkout::where('workout_id', $this->workout->id)->where('url', '!=', 'NULL')->get();
        return view('livewire.admin.workout.student', compact('studentWorkouts'));
    }
}
