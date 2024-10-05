<?php

namespace App\Livewire\Admin\Lesson\Workouts;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class Edit extends ModalComponent
{
    use WireUiActions;
    use WithFileUploads;
    public $workout;
    public $description;
    public $lesson;
    public $file;
    public function mount($workout_id)
    {
        $this->workout = LessonWorkout::findOrFail($workout_id);

        $this->description = $this->workout->description;
    }

    public function edit()
    {
        $this->validate([
            'description' => 'required',
        ]);

        if($this->file){
            $this->workout->file = $this->file->store(path: 'public/workouts');
        }

        $this->workout->description = $this->description;
        $this->workout->save();

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Workout Edit'),
            'description' => __("Data saved successfully."),
        ]);

        $this->dispatch('closeModal');
        $this->dispatch('admin.lesson.workouts.index.render');
    }

    public function render()
    {
        $lessons = Lesson::latest('id')->get();
        return view('livewire.admin.lesson.workouts.edit', compact('lessons'));
    }
}
