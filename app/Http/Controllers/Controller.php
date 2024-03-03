<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Json;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected $json;

  public function __construct()
  {
    $this->json = new Json();
  }
}
