<?php

namespace App\Livewire\Admin\Lesson;

use App\Mail\CheckWorkoutMail;
use App\Mail\NewWorkoutSubmitMail;
use App\Models\Lesson;
use App\Models\StudentWorkout;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;
use Livewire\Component;

class Workout extends Component
{
    public $lesson_id;
    public $lesson;

    public function mount($lesson_id)
    {
        $this->lesson_id = $lesson_id;
        $this->lesson = Lesson::findOrFail($lesson_id);
    }

    public function accept($workout_id)
    {
        $studentWorkout = StudentWorkout::findOrFail($workout_id);
        $studentWorkout->check = 1;
        if(!$studentWorkout->checker_user_id)  {
            $studentWorkout->checker_user_id = auth()->user()->id;
            Mail::to(User::findOrFail($studentWorkout->student_id))->send(new CheckWorkoutMail($studentWorkout));

        }
        $studentWorkout->save();
        $this->dispatch('check-workout');
    }

    public function reject($workout_id)
    {
        $studentWorkout = StudentWorkout::findOrFail($workout_id);
        $studentWorkout->check = -1;
        if(!$studentWorkout->checker_user_id)  {
            $studentWorkout->checker_user_id = auth()->user()->id;
            Mail::to(User::findOrFail($studentWorkout->student_id))->send(new CheckWorkoutMail($studentWorkout));

        }
        $studentWorkout->save();
        $this->dispatch('check-workout');
    }

    #[On('check-workout')]
    public function render()
    {
        $workouts = StudentWorkout::with(['workout'])->where('lesson_id', $this->lesson_id)->where('url', '!=', 'NULL')->where('check',0)->get();
        return view('livewire.admin.lesson.workout', compact('workouts'));
    }
}
