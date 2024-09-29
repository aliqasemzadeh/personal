<?php

namespace App\Livewire\Admin\Student;

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    #[On('admin.student.index.render')]
    public function render()
    {
        $students = User::all();
        return view('livewire.admin.student.index', compact('students'));
    }
}
