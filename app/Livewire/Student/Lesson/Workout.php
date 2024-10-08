<?php

namespace App\Livewire\Student\Lesson;

use App\Mail\NewWorkoutSubmitMail;
use App\Models\StudentWorkout;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use App\Models\LessonWorkout;
use WireUi\Traits\WireUiActions;

class Workout extends Component
{
    use WireUiActions;
    public LessonWorkout $workout;
    public $url;
    public StudentWorkout $studentWorkout;

    public function mount(LessonWorkout $workout)
    {
        $this->workout = $workout;
        $this->studentWorkout = StudentWorkout::firstOrCreate([
            'workout_id' => $workout->id,
            'lesson_id' => $workout->lesson_id,
            'student_id' => auth()->user()->id
        ]);
        $this->url = $this->studentWorkout->url;
    }

    public function submit()
    {
        $this->validate([
            'url' => 'required|url'
        ]);

        $this->studentWorkout->url = $this->url;
        $this->studentWorkout->check = 0;
        $this->studentWorkout->save();

        Mail::to(User::whereIn('id',config('personal.admins'))->get())->send(new NewWorkoutSubmitMail($this->workout));
        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Submit Workout'),
            'description' => __("Your workout saved."),
        ]);
        $this->dispatch('saved');
    }
    public function render()
    {
        return view('livewire.student.lesson.workout');
    }
}
