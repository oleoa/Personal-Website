<?php

namespace App\Helpers;

class Data
{
    // Page Title
    private string $title;

    // Current Page (Route Name)
    private string $current;

    // Custom Data
    private array $custom;

    public function __construct()
    {
        $this->title = '';
        $this->current = '';
        $this->custom = array();
    }
    
    public function title($title = null)
    {
        if($title === '?') return $this->title!='';
        if ($title) $this->title = $title;
        else return $this->title;
    }

    public function current($current = null)
    {
        if ($current) $this->current = $current;
        else return $this->current;
    }

    public function custom($key, $value = null)
    {
        if ($value) $this->custom[$key] = $value;
        else return $this->custom[$key];
    }

    public function remove($key)
    {
        unset($this->custom[$key]);
    }

    public function exists($key)
    {
        return isset($this->custom[$key]);
    }

    public function get()
    {
        // Set Default Data
        $data = array(
            'title' => $this->title,
            'current' => $this->current
        );

        // Merge Custom Data
        foreach($this->custom as $key => $value) $data[$key] = $value;

        // Return Data
        return $data;
    }
}
