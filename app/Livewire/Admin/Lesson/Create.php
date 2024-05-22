<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $description;

    public function create()
    {
        $this->validate([
            'title' => ['required', 'string'],
            'description' => 'nullable',
        ]);

        $lesson = Lesson::create([
            'title' => $this->title,
            'description' => $this->description,
        ]);


    }
    public function render()
    {
        return view('livewire.admin.lesson.create');
    }
}
