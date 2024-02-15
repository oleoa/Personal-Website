<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class Movies
{
    private $data_array = [];
    private $file_path;

    public function __construct()
    {
        $this->file_path = public_path('movies.json');
        $json_data = File::get($this->file_path);
        $this->data_array = json_decode($json_data, true);
        $this->data_array == null ? $this->data_array = [] : '';
    }

    public function get($id = null)
    {
        if ($id) return $this->data_array[$id];
        return $this->data_array;
    }

    public function add($movie)
    {
        if(!$movie || !$movie['title'] || !$movie['addedBy']) return;
        $movie['watched'] = false;
        $movie['id'] = count($this->data_array);
        array_push($this->data_array, $movie);
        $updated_json_data = json_encode($this->data_array);
        File::put($this->file_path, $updated_json_data);
    }

    public function update($watched)
    {
        foreach($this->data_array as $key => $movie)
            if(in_array($movie['id'], $watched))
                $this->data_array[$key]['watched'] = true;
            else
                $this->data_array[$key]['watched'] = false;
        $updated_json_data = json_encode($this->data_array);
        File::put($this->file_path, $updated_json_data);
    }

    public function delete($id)
    {
        foreach($this->data_array as $movie)
            if($movie['id'] == $id)
                unset($this->data_array[$id]);
        $updated_json_data = json_encode($this->data_array);
        File::put($this->file_path, $updated_json_data);
    }
}
