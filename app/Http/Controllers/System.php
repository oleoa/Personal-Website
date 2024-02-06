<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class System extends Controller
{
    public function switchmode()
    {
        session(['darkmode' => !session('darkmode')]);
        return redirect()->back();
    }
    public function lightmode()
    {
        session(['darkmode' => false]);
        return redirect()->back();
    }
    public function darkmode()
    {
        session(['darkmode' => true]);
        return redirect()->back();
    }

    public function language($locale)
    {
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
