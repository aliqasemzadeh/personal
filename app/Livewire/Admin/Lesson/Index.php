<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\Lesson;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public function delete($id)
    {
        $lesson = Lesson::findOrFail($id);
        $lesson->delete();

        $this->dispatch('delete-lesson');
    }

    #[On('delete-lesson')]
    public function render()
    {
        $lessons = Lesson::all();
        return view('livewire.admin.lesson.index', compact('lessons'));
    }
}
