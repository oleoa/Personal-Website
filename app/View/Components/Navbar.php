<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Navbar extends Component
{
  public $menu;
  public $current;

  /**
   * Create a new component instance.
   */
  public function __construct($menu, $current = null)
  {
    $this->menu = $menu;
    $this->current = $current;
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.navbar');
  }
}
