<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateWorkspace extends Component
{
    #[Validate('required')]
    public string $name = '';

    public function save()
    {
        $this->validate();

        $workspace = Auth::user()->workspaces()->create([
            'name' => $this->name,
            'default' => true,
        ]);

        $defaultWorkspace = Auth::user()->defaultWorkspace();

        $defaultWorkspace->default = false;
        $defaultWorkspace->save();



        $this->dispatch('workspaceCreated');
        $this->dispatch('dialog:close');
        $this->redirect(route('workspace', [
            'workspace' => $workspace,
        ]), true);
    }

    public function render()
    {
        return view('livewire.components.create-workspace');
    }
}
