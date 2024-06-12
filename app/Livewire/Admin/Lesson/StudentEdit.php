<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\LessonStudent;
use Livewire\Component;

class StudentEdit extends Component
{
    public LessonStudent $student;

    public function mount(LessonStudent $student)
    {
        $this->student = $student;
    }

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.admin.lesson.student-edit');
    }
}
