<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $lessons = Lesson::all();
        return view('livewire.admin.lesson.index', compact('lessons'));
    }
}
