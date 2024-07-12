<?php

namespace App\Livewire\Admin\Student;

use App\Models\LessonStudent;
use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class Workouts extends ModalComponent
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function render()
    {
        $lessons = LessonStudent::with('lesson')->where('student_id', $this->user->student_id)->get();
        return view('livewire.admin.student.workouts', compact('lessons'));
    }
}
