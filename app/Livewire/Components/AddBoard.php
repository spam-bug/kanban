<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddBoard extends Component
{
    #[Validate('required')]
    public string $name = '';

    public function save()
    {
        $this->validate();

        $workspace = Auth::user()->defaultWorkspace();

        $board = $workspace->boards()->create([
            'name' => $this->name,
        ]);

        $this->dispatch('dialog:close');
        $this->dispatch('boardAdded');

        $this->redirect(route('board', [
            'workspace' => $workspace,
            'board' => $board,
        ]), true);
    }

    public function render()
    {
        return view('livewire.components.add-board');
    }
}
