<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class RegistrationForm extends Component
{
    public string $name;

    public string $email;

    public string $password;

    public string $repeat_password;

    protected function rules()
    {
        return [
            'name' => 'required|min:2|max:64',
            'email' => 'required|unique:users|email|max:64',
            'password' => [
                'required',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'repeat_password' => 'required|confirmed:password',
        ];
    }

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.registration-form');
    }
}
