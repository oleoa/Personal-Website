<?php

namespace App\Helpers;

class Data
{
    // Page Title
    private string $title;

    // Current Page (Route Name)
    private string $current;

    // Logged Status
    private bool $logged;

    // Dark Mode Status
    private bool $darkmode;

    // Custom Data
    private array $custom;

    public function __construct()
    {
        $this->title = '';
        $this->current = '';
        $this->logged = false;
        $this->darkmode = false;
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

    public function logged($logged = null)
    {
        if ($logged) $this->logged = $logged;
        else return $this->logged;
    }

    public function darkmode($darkmode = null)
    {
        if ($darkmode) $this->darkmode = $darkmode;
        else return $this->darkmode;
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
            'current' => $this->current,
            'logged' => $this->logged,
            'darkmode' => $this->darkmode,
        );

        // Merge Custom Data
        foreach($this->custom as $key => $value) $data[$key] = $value;

        // Return Data
        return $data;
    }
}
