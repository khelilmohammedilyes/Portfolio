<?php

namespace App\View\Components\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBarItems extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $href)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.nav-bar-items');
    }
}
