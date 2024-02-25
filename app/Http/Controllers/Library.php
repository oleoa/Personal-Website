<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Library extends Controller
{
  public function index(Request $request)
  {
    $library = json_decode(File::get(public_path('library.json')), true);
    $this->data['library'] = $library;
    return $this->load('library', $request);
  }

  public function sidebar(Request $request)
  {
    return $this->load('library.sidebar', $request);
  }

  public function loader(Request $request)
  {
    return $this->load('library.loader', $request);
  }

  public function faq(Request $request)
  {
    return $this->load('library.faq', $request);
  }

  public function carousel(Request $request)
  {
    return $this->load('library.carousel', $request);
  }
}
