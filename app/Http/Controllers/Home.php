<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\AccountCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Home extends Controller
{
    public function index()
    {
        return $this->load('home');
    }
}
