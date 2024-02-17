<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Movies;

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

    public function Movies(Request $request)
    {
        if($request->isMethod('delete'))
        {
            $api = new Movies();
            $api->delete($request->id);
            return redirect()->route('alice');
        }
        if($request->isMethod('get'))
        {
            $api = new Movies();
            return $api->get();
        }
        
        $api = new Movies();
        $movie = [
            'title' => $request->title,
            'addedBy' => $request->addedBy
        ];
        $api->add($movie);
        $api->update($request->watched);
        return redirect()->route('alice');
    }

}
