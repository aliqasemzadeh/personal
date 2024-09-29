<?php

namespace App\Livewire\Admin\Lesson\Workouts;

use App\Models\Lesson;
use App\Models\LessonWorkout;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $lesson_id;
    public $lesson;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
        $this->lesson = Lesson::findOrFail($lesson_id);
    }

    public function delete($id)
    {
        $lesson = LessonWorkout::findOrFail($id);
        $lesson->delete();

        $this->dispatch('admin.lesson.workout.index.render');
    }

    #[On('admin.lesson.workouts.index.render')]
    public function render()
    {
        $workouts = LessonWorkout::where('lesson_id', $this->lesson_id)->latest('id')->get();
        return view('livewire.admin.lesson.workouts.index', compact('workouts'));
    }
}
