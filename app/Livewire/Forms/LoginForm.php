<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate(rule: 'required', as: 'email address')]
    public string $email = '';

    #[Validate(rule: 'required')]
    public string $password = '';

    public bool $remember = false;
}
