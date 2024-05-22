<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Component;

class Create extends Component
{
    public $description;
    public $lesson_id;

    public function create()
    {
        $this->validate([
            'description' => 'required',
            'lesson_id' => 'required'
        ]);

        LessonWorkout::create([
            'description' => $this->description,
            'lesson_id' => $this->lesson_id
        ]);
        $this->redirectRoute('admin.workout.index');
    }
    public function render()
    {
        $lessons = Lesson::all();
        return view('livewire.admin.workout.create', compact('lessons'));
    }
}
