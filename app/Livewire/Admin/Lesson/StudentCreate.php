<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\LessonStudent;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class StudentCreate extends Component
{
    use WireUiActions;
    public $student_id;
    public $lesson_id;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }

    public function create()
    {
        $this->validate([
            'student_id'=>'required',
            'lesson_id'=>'required',
        ]);

        new LessonStudent([
            'lesson_id' => $this->lesson_id,
            'student_id' => $this->student_id,
        ]);
        $this->notification()->send([
            'icon' => 'success',
            'title' => __('Created Successfully'),
        ]);

        $this->dispatch('upload-student-file');
    }

    public function render()
    {
        return view('livewire.admin.lesson.student-create');
    }
}
