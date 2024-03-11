<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Library extends Controller
{
  public function sidebar()
  {
    return view('library.sidebar');
  }

  public function loader()
  {
    return view('library.loader');
  }

  public function faq()
  {
    return view('library.faq');
  }

  public function carousel()
  {
    return view('library.carousel');
  }

  public function carousel2()
  {
    return view('library.carousel2');
  }
}
