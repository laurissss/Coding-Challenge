<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required')]
    public string $email;

    #[Validate('required')]
    public string $password;

    public function login()
    {
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Anmeldung erfolgreich');

            return $this->redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
