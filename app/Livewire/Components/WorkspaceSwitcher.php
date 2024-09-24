<?php

namespace App\Livewire\Components;

use App\Models\Workspace;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class WorkspaceSwitcher extends Component
{
    public function switch(Workspace $workspace)
    {
        $defaultWorkspace = Auth::user()->defaultWorkspace();

        if ($defaultWorkspace->is($workspace)) return;

        $defaultWorkspace->default = false;
        $defaultWorkspace->save();

        $workspace->default = true;
        $workspace->save();

        $this->redirect(route('workspace', [
            'workspace' => $workspace,
        ]), true);
    }

    public function render()
    {
        return view('livewire.components.workspace-switcher', [
            'workspaces' => Auth::user()->workspaces,
        ]);
    }
}
