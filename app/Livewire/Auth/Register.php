<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegistrationForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Register extends Component
{
    public RegistrationForm $form;

    public function attempt()
    {
        $this->form->save();
    }
}
