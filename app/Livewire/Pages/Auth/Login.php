<?php

namespace App\Livewire\Pages\Auth;

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    public LoginForm $form;

    public function attempt()
    {
        $this->form->validate();

        if (!Auth::attempt($this->form->only(['email', 'password']), $this->form->remember)) {
            $this->addError('form.email', 'Credentials did not match our records.');
            return;
        }

        $this->redirect(route('workspace', [
            'workspace' => Auth::user()->workspaces()->default()->first(),
        ]));
    }
}
