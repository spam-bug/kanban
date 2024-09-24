<?php

namespace App\Livewire\Wireables;

use Livewire\Wireable;

class DialogState implements Wireable
{
    public function __construct(
        public bool $show = false,
        public string $component = '',
        public $arguments = null
    ) {}

    public function toLivewire()
    {
        return [
            'show' => $this->show,
            'component' => $this->component,
            'arguments' => $this->arguments,
        ];
    }

    public static function fromLivewire($value)
    {
        return new static(
            show: $value['show'],
            component: $value['component'],
            arguments: $value['arguments'],
        );
    }
}
