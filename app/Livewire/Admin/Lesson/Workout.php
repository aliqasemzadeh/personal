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

    #[On('check-workout')]
    public function render()
    {
        $workouts = StudentWorkout::with(['workout'])->where('lesson_id', $this->lesson_id)->where('url', '!=', 'NULL')->get();
        return view('livewire.admin.lesson.workout', compact('workouts'));
    }
}
