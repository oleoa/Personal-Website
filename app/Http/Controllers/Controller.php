<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Data;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected Data $data;

    public function __construct()
    {
        $this->data = new Data();
    }

    protected function load($view)
    {
        $this->data->title('Title-'.$view);
        $this->data->current($view);
        return view($view, $this->data->get());
    }
}
