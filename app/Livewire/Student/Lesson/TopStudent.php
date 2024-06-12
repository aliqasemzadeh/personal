<?php

namespace App\Livewire\Student\Lesson;

use App\Models\LessonStudent;
use Livewire\Component;

class TopStudent extends Component
{
    public function render()
    {
        $lessons = LessonStudent::with('lesson')->where('student_id', auth()->user()->student_id)->get();
        return view('livewire.student.lesson.top-student', compact('lessons'));
    }
}
