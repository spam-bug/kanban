<?php

namespace App\Livewire\Pages;

use App\Models\Workspace as UserWorkspace;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Workspace extends Component
{
    public UserWorkspace $workspace;

    public function mount(UserWorkspace $workspace)
    {
        $this->workspace = $workspace;
    }
}
