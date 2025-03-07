<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Option extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $user,
        public string $userTeste,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.option');
    }

    public function isSelected(): bool
    {
        return $this->userTeste === $this->user;
    }
}
