<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $description;
    public $lesson_id;
    public $file;

    public function create()
    {
        $this->validate([
            'description' => 'required',
            'lesson_id' => 'required'
        ]);

        $workout = LessonWorkout::create([
            'description' => $this->description,
            'lesson_id' => $this->lesson_id
        ]);

        if($this->file){
            $workout->file = $this->file->store(path: 'workouts');
            $workout->save();
        }

        $this->redirectRoute('admin.workout.index');
    }
    public function render()
    {
        $lessons = Lesson::all();
        return view('livewire.admin.workout.create', compact('lessons'));
    }
}
