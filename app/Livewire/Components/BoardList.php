<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class BoardList extends Component
{
    #[On('boardAdded')]
    public function render()
    {
        return view('livewire.components.board-list', [
            'boards' => Auth::user()->defaultWorkspace()->boards,
        ]);
    }
}
