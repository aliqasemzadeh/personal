<?php

namespace App\Livewire\Admin\Lesson;

use App\Models\StudentWorkout;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Checker extends Component
{
    public function render()
    {
        $users = StudentWorkout::selectRaw('checker_user_id, count(*) as total')
            ->where('check', '!=', 0)
            ->groupBy('checker_user_id')
            ->get();
        return view('livewire.admin.lesson.checker', compact('users'));
    }
}
