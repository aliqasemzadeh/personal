<?php

namespace App\Livewire\Student\Lesson;

use App\Models\StudentWorkout;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\LessonWorkout;

class Workout extends Component
{
    public LessonWorkout $workout;
    public $url;
    public StudentWorkout $studentWorkout;

    public function mount(LessonWorkout $workout)
    {
        $this->workout = $workout;
        $this->studentWorkout = StudentWorkout::firstOrCreate([
            'workout_id' => $workout->id,
            'lesson_id' => $workout->lesson_id,
            'student_id' => auth()->user()->id
        ]);
        $this->url = $this->studentWorkout->url;
    }

    public function submit()
    {
        $this->validate([
            'url' => 'required|url'
        ]);

        $this->studentWorkout->url = $this->url;
        $this->studentWorkout->save();

        $this->dispatch('saved');
    }
    public function render()
    {
        return view('livewire.student.lesson.workout');
    }
}
