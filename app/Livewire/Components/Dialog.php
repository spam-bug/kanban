<?php

namespace App\Livewire\Components;

use App\Livewire\Wireables\DialogState;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dialog extends Component
{
    public DialogState $state;

    public function mount()
    {
        $this->state = new DialogState;
    }

    public function render(): View
    {
        return view('livewire.components.dialog');
    }
}
