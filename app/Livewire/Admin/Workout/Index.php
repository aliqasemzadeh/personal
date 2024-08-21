<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        $lesson = LessonWorkout::findOrFail($id);
        $lesson->delete();

        $this->dispatch('delete-workout');
    }

    #[On('delete-workout')]
    public function render()
    {
        $workouts = LessonWorkout::with('lesson')->latest()->get();
        return view('livewire.admin.workout.index', compact('workouts'));
    }
}
