<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $current;

    /**
     * Create a new component instance.
     */
    public function __construct( $current )
    {
        $this->current = $current;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
