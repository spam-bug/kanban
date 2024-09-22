<?php

namespace App\Livewire\Pages\Auth;

use App\Livewire\Forms\RegistrationForm;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.auth')]
class Register extends Component
{
    public RegistrationForm $form;

    public function attempt()
    {
        $data = $this->form->validate();
        $user = User::create($data);

        $user->workspaces()->create([
            'name' => "{$user->first_name}'s workspace",
            'default' => true,
        ]);

        Auth::login($user);

        $this->redirect(route('workspace', [
            'workspace' => $user->workspaces()->first(),
        ]));
    }
}
