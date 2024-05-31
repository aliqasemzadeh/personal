<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use App\Models\StudentWorkout;
use Livewire\Attributes\On;
use Livewire\Component;

class Workout extends Component
{
    public $lesson_id;
    public $lesson;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
        $this->lesson = Lesson::findOrFail($lesson_id);
    }

    public function accept($workout_id)
    {
        $studentWorkout = StudentWorkout::findOrFail($workout_id);
        $this->dispatch('check-workout');
    }

    public function reject($workout_id)
    {
        $studentWorkout = StudentWorkout::findOrFail($workout_id);
        $this->dispatch('check-workout');
    }

    #[On('check-workout')]
    public function render()
    {
        $workouts = StudentWorkout::with(['workout'])->where('lesson_id', $this->lesson_id)->where('url', '!=', 'NULL')->where('check',0)->get();
        return view('livewire.admin.lesson.workout', compact('workouts'));
    }
}
