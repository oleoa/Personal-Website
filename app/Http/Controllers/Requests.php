<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Requests extends Controller
{
    public function Contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        session()->flash('info', 'Success');
        session()->flash('message', 'Your message has been sent!');
        return redirect()->route('contact');
    }
}
