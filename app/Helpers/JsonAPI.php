<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class JsonAPI
{
    public function get($filename)
    {
        // Will search for the file in the public directory
        $filepath = public_path($filename);

        // Get the file contents
        $data = File::get($filepath);

        // Decode the JSON data
        $data = json_decode($data, true);

        // If the data is empty, return an empty array
        if($data == null) $data = [];

        // Return the data
        return $data;
    }
}
