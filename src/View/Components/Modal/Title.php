<?php

namespace BaseTheme\View\Components\Modal;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Title extends Component
{
    public ?string $title = null;

    public function render(): View|Closure|string
    {
        return view('base::components.modal.title', [
            'title' => $this->title
        ]);
    }
}
