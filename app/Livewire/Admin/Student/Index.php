<?php

namespace App\Livewire\Admin\Student;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $students = User::all();
        return view('livewire.admin.student.index', compact('students'));
    }
}
