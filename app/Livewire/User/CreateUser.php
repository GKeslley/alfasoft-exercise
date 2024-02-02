<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Repositories\Eloquents\UserRepository;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class CreateUser extends Component
{
    #[Validate]
    public string $name = '';
    #[Validate]
    public string $email = '';
    #[Validate]
    public string $password = '';

    public function mount()
    {
        if (Auth::check()) {
            $this->skipRender();
            $this->redirectRoute('index');
        }
    }

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()]
        ];
    }

    public function save(UserRepository $repository)
    {
        $validated = $this->validate();
        $userCreated = $repository->store($validated);
        Auth::login($userCreated);
        $this->redirectRoute('index');
    }

    public function render()
    {
        return view('livewire.user.create-user');
    }
}