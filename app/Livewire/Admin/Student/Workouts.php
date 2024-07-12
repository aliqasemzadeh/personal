<?php

namespace App\Livewire\Admin\Student;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Workouts extends ModalComponent
{
    public function render()
    {
        return view('livewire.admin.student.workouts');
    }
}
