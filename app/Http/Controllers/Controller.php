<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Json;

class Controller extends BaseController
{
  use AuthorizesRequests, ValidatesRequests;

  protected $data = array();
  protected $json;

  public function __construct()
  {
    // Create a new instance of the Json helper
    $this->json = new Json();
  }

  protected function load($view, $request)
  {
    // Get the route name for the title and current variables
    $routeName = $request->route()->getName();

    // Set the title for translation files
    $this->data['title'] = 'title-'.$routeName;

    // Set the current route for the active class in the navigation
    $this->data['current'] = $routeName;

    // Get the menu from the config file for both navbar and sidebar
    $this->data['menu'] = $this->json->get('menu.json');
    
    // Return the view with the data
    return view($view, $this->data);
  }
}
