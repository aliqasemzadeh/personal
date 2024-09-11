<?php

namespace App\Livewire\User;

use App\Rules\CheckGitHubExit;
use App\Rules\CheckGitHubFollow;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateStudentInformation extends Component
{
    public $github;
    public $student_id;
    public function mount() : void
    {
        $this->github = auth()->user()->github;
        $this->student_id = auth()->user()->student_id;
    }

    public function updateProfileInformation() : void
    {
        $this->resetErrorBag();
        $this->validate([
            'github' => ['required', 'string', new CheckGitHubExit, new CheckGitHubFollow, Rule::unique('users')->ignore(auth()->user()->id)],
            'student_id' => ['numeric', 'required', Rule::unique('users')->ignore(auth()->user()->id)],
        ]);

        auth()->user()->github = $this->github;
        auth()->user()->student_id = $this->student_id;
        auth()->user()->save();

        $this->dispatch('saved');

        $this->dispatch('refresh-navigation-menu');

        $this->redirectRoute('student.lesson.index');
    }


    public function render()
    {
        return view('livewire.user.update-student-information');
    }
}
