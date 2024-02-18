<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Library extends Controller
{
    public function index()
    {
        return $this->load('library');
    }

    public function sidebar()
    {
        return $this->load('sidebar');
    }
}
