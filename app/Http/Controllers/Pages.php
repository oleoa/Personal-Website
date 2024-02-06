<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pages extends Controller
{
    public function Home()
    {
        return $this->load('home');
    }

    public function About()
    {
        return $this->load('about');
    }

    public function Portfolio()
    {
        return $this->load('portfolio');
    }

    public function Skills()
    {
        return $this->load('skills');
    }

    public function Contact()
    {
        return $this->load('contact');
    }
}
