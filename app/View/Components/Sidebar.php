<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Sidebar extends Component
{
    public $logged;
    public $current;

    /**
     * Create a new component instance.
     */
    public function __construct( $logged, $current )
    {
        $this->logged = $logged;
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
