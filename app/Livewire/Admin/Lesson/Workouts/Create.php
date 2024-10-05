<?php

namespace App\Livewire\Admin\Lesson\Workouts;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Component;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class Create extends ModalComponent
{
    use WireUiActions;
    use WithFileUploads;
    public $description;
    public $lesson_id;
    public $lesson;
    public $file;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
        $this->lesson = Lesson::findOrFail($this->lesson_id);
    }

    public function create()
    {
        $this->validate([
            'description' => 'required',
        ]);

        $workout = LessonWorkout::create([
            'description' => $this->description,
            'lesson_id' => $this->lesson_id
        ]);

        if($this->file){
            $workout->file = $this->file->store(path: 'workouts');
            $workout->save();
        }

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
        return view('livewire.admin.lesson.workouts.create', compact('lessons'));
    }
}
