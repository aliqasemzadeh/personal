<?php

namespace App\Livewire\Admin\Lesson;

use App\Imports\StudentsImport;
use App\Models\LessonStudent;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\Attributes\On;

class Student extends Component
{
    use WithFileUploads;
    public $file;
    public $lesson_id;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }

    public function import()
    {
        $this->validate([
            'file' => 'required|file|max:2048000'
        ]);

        $file = $this->file->store('files');
        Excel::import(new StudentsImport($this->lesson_id), $file);
        $this->dispatch('upload-student-file');
    }

    #[On('upload-student-file')]
    public function render()
    {
        $students = LessonStudent::where('lesson_id', $this->lesson_id)->get();
        return view('livewire.admin.lesson.student', compact('students'));
    }
}
