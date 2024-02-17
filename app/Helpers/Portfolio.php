<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;
use App\Helpers\JsonAPI;

class Portfolio extends JsonAPI
{
    private $data;

    public function __construct()
    {
        $this->data = $this->get('portfolio.json');
    }

    public function listProjects()
    {
        return $this->data;
    }
}
