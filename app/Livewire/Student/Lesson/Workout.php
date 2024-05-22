<?php

namespace App\Livewire\Student\Lesson;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\LessonWorkout;

class Workout extends Component
{
    public LessonWorkout $workout;
    public $url;

    public function mount(LessonWorkout $workout)
    {
        $this->workout = $workout;
    }

    public function submit()
    {
        $this->validate([
            'url' => 'required|url'
        ]);


    }
    public function render()
    {
        return view('livewire.student.lesson.workout');
    }
}
