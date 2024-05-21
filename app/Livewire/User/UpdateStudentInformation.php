<?php

namespace App\Livewire\User;

use Livewire\Component;

class UpdateStudentInformation extends Component
{
    public function mount()
    {
        $this->github = auth()->user()->girhub;
        $this->student_id = auth()->user()->student_id;
    }
    public function render()
    {
        return view('livewire.user.update-student-information');
    }
}
