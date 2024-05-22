<?php

namespace App\Livewire\Admin\Workout;

use App\Models\LessonWorkout;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $workouts = LessonWorkout::with('lesson')->get();
        return view('livewire.admin.workout.index', compact('workouts'));
    }
}
