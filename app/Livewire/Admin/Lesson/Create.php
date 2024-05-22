<?php

namespace App\Livewire\Admin\Lesson;

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



    }
    public function render()
    {
        return view('livewire.admin.lesson.create');
    }
}
