<?php

namespace App\Http\Controllers\Personal;

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
            'skills' => [
                'name' => 'Bar-skills',
                'route' => route('skills'),
                'current' => $current == 'skills',
            ],
            'contact' => [
                'name' => 'Bar-contact',
                'route' => route('contact'),
                'current' => $current == 'contact',
            ]
        ];
    }

    protected function load($view)
    {
        $this->data['title'] = 'Title-'.$view;
        $this->data['current'] = $view;
        $this->data['menu'] = $this->menu($view);
        return view('personal.'.$view, $this->data);
    }
}
