<?php

namespace BaseTheme\View\Components\Modal;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Container extends Component
{
    public ?string $bg = null;

    public function __construct()
    {}

    public function render(): View|Closure|string
    {
        return view('base::components.modal.container', [
            'bg' => $this->bg
        ]);
    }
}
