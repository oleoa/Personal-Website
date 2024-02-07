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

        session(['info' => 'Success']);
        session(['message' => 'Your message has been sent!']);
        return redirect()->route('contact');
    }
}
