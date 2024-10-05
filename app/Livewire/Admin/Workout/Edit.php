<?php

namespace App\Livewire\Admin\Workout;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $description;
    public $lesson_id;
    public $workout_id;
    public $workout;
    public $file;

    public function mount($workout_id)
    {
        $this->workout_id = $workout_id;
        $this->workout = LessonWorkout::findOrFail($workout_id);
        $this->lesson_id = $this->workout->lesson_id;
        $this->description = $this->workout->description;
    }
    public function edit()
    {
        $this->validate([
            'description' => 'required',
            'lesson_id' => 'required'
        ]);

        if($this->file){
            $this->workout->file = $this->file->store(path: 'public/workouts');
        }

        $this->workout->lesson_id = $this->lesson_id;
        $this->workout->description = $this->description;
        $this->workout->save();

        $this->redirectRoute('admin.workout.index');
    }

    public function render()
    {
        $lessons = Lesson::all();
        return view('livewire.admin.workout.edit', compact('lessons'));
    }
}
