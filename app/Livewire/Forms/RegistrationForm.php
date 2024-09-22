<?php

namespace App\Livewire\Forms;

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
}
