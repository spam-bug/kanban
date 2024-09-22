<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class RegistrationForm extends Form
{
    #[Validate('required|min:3')]
    public string $first_name = '';

    #[Validate('required|min:3')]
    public string $last_name = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|min:8')]
    public string $password = '';

    public function save(): User
    {
        $data = $this->validate();
        $user = User::create($data);

        Auth::login($user);

        return $user;
    }
}
