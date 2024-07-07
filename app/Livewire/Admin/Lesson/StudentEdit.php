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
        $this->absence = $student->absence;
        $this->plus = $student->plus;
        $this->conferences = $student->conferences;

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
        if($this->student->lesson_id == 3) {
            $grade = $this->student->workout_point + $this->student->conferences + $this->student->plus * 0.25 + $this->student->absence * -0.5 + ($this->student->midterm / 4) + (($this->student->final* 4) / 4);
        } else {
            $grade = $this->student->workout_point + $this->student->conferences + $this->student->plus * 0.25 + $this->student->absence * -0.5 + ($this->student->midterm / 4) + (($this->student->final* 3) / 4);
        }

        $this->student->total_point = $grade;
        $this->student->save();

        $this->dispatch('saved');

    }

    public function render()
    {
        return view('livewire.admin.lesson.student-edit');
    }
}
