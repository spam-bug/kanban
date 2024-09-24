<?php

namespace App\Providers;

use App\Livewire\Components\AddBoard;
use App\Livewire\Components\BoardList;
use App\Livewire\Components\Dialog;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Livewire::component('dialog', Dialog::class);
        Livewire::component('add-board', AddBoard::class);
        Livewire::component('board-list', BoardList::class);
    }
}
