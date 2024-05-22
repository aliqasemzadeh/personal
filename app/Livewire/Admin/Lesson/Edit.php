<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use Livewire\Component;

class Edit extends Component
{
    public $title;
    public $description;
    public $lesson;
    public function mount($id)
    {
        $this->lesson = Lesson::findOrFail($id);
        $this->title = $this->lesson->title;
        $this->description = $this->lesson->description;
    }

    public function edit()
    {
        $this->validate([
            'title' => ['required', 'string'],
            'description' => 'nullable',
        ]);

        $this->lesson->title = $this->title;
        $this->lesson->description = $this->description;
        $this->lesson->save();

        $this->redirectRoute('admin.lesson.index');
    }

    public function render()
    {
        return view('livewire.admin.lesson.edit');
    }
}
