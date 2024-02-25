<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected $data;

  public function __construct()
  {
    $this->data = array();
  }

  private function menu($current)
  {
    return [
      'home' => [
        'name' => 'Bar-home',
        'route' => route('home'),
        'current' => $current == 'home',
      ],
      'about' => [
        'name' => 'Bar-about',
        'route' => route('about'),
        'current' => $current == 'about',
      ],
      'portfolio' => [
        'name' => 'Bar-portfolio',
        'route' => route('portfolio'),
        'current' => $current == 'portfolio',
      ],
      'library' => [
        'name' => 'Bar-library',
        'route' => route('library'),
        'current' => $current == 'library',
      ],
      'contact' => [
        'name' => 'Bar-contact',
        'route' => route('contact'),
        'current' => $current == 'contact',
      ]
    ];
  }

  protected function load($view, $request)
  {
    $this->data['title'] = 'Title-'.$view;
    $this->data['current'] = $request->path();
    $this->data['menu'] = $this->menu($view);
    return view($view, $this->data);
  }
}
