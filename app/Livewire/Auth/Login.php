<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public LoginForm $form;

    public function attempt()
    {
        $this->form->authenticate();
    }
}
