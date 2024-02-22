<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Library extends Controller
{
    public function index()
    {
        $library = json_decode(File::get(public_path('library.json')), true);
        $this->data['library'] = $library;
        return $this->load('library');
    }

    public function sidebar()
    {
        return $this->load('sidebar');
    }

    public function loader()
    {
        return $this->load('loader');
    }

    public function faq()
    {
        return $this->load('faq');
    }

    public function carousel()
    {
        return $this->load('carousel');
    }
}
