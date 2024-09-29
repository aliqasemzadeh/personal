<?php

namespace App\Livewire\Admin\Lesson\Workouts;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class Edit extends ModalComponent
{
    use WireUiActions;
    public $workout;
    public $description;
    public $lesson_id;
    public $lesson;
    public function mount($workout_id)
    {
        $this->workout = LessonWorkout::findOrFail($workout_id);

        $this->lesson_id =  $this->workout->lesson_id;;
        $this->description = $this->workout->description;
    }

    public function edit()
    {
        $this->validate([
            'description' => 'required',
            'lesson_id' => 'required'
        ]);

        $this->workout->lesson_id = $this->lesson_id;
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
        $lessons = Lesson::all();
        return view('livewire.admin.lesson.workouts.edit', compact('lessons'));
    }
}
