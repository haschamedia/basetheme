<?php

namespace BaseTheme\View\Components\Modal;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InlineBoard extends Component
{
    public ?string $heading = null;
    public ?string $description = null;
    public ?string $bg = null;

    public function __construct()
    {}

    public function render(): View|Closure|string
    {
        return view('base::components.modal.inline-board', [
            'bg' => $this->bg
        ]);
    }
}
