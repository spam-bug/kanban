<?php

namespace App\Livewire\Pages;

use App\Models\Board as BoardModel;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Board extends Component
{
    public BoardModel $board;

    public function mount(BoardModel $board)
    {
        $this->board = $board;
    }

    public function render()
    {
        return view('livewire.pages.board');
    }
}
