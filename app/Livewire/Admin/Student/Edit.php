<?php

namespace App\Livewire\Admin\Student;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\WireUiActions;

class Edit extends ModalComponent
{
    use WireUiActions;
    public User $user;

    public $name;
    public $email;
    public $github;
    public $telegram;
    public $password;

    public function mount(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->github = $user->github;
        $this->email = $user->email;
        $this->telegram = $user->telegram;
    }

    public function edit()
    {
        $this->validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($this->user->id)],
            'github' => 'required',
        ]);

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->github = $this->github;
        $this->user->telegram = $this->telegram;
        if($this->password){
            $this->user->password = Hash::make($this->password);
        }
        $this->user->save();

        $this->notification()->send([
            'icon' => 'info',
            'title' => __('Student Edit'),
            'description' => __("Data saved successfully."),
        ]);

        $this->dispatch('closeModal');
        $this->dispatch('admin.student.index.render');
    }

    public function render()
    {
        return view('livewire.admin.student.edit');
    }
}
