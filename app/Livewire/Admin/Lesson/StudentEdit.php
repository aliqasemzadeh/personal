<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\LessonStudent;
use Livewire\Component;

class StudentEdit extends Component
{
    public LessonStudent $student;
    public $midterm;
    public $final;
    public $absence;
    public $plus;
    public $conferences;

    public function mount(LessonStudent $student)
    {
        $this->student = $student;
        $this->midterm = $student->midterm;
        $this->final = $student->final;
        $this->absence = $this->absence;
        $this->plus = $this->plus;
        $this->conferences = $this->conferences;

    }

    public function save()
    {
        $this->validate([
            'midterm' => 'required',
            'final' => 'required',
            'absence' => 'required',
            'plus' => 'required',
            'conferences' => 'required',
        ]);

        $this->student->midterm = $this->midterm;
        $this->student->final = $this->final;
        $this->student->absence = $this->absence;
        $this->student->plus = $this->plus;
        $this->student->conferences = $this->conferences;
        $this->student->save();

        $this->dispatch('saved');

    }

    public function render()
    {
        return view('livewire.admin.lesson.student-edit');
    }
}
