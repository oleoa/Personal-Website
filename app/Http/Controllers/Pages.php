<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Portfolio;
use App\Helpers\Movies;

class Pages extends Controller
{
    public function Home()
    {
        return $this->load('home');
    }

    public function area41()
    {
        return $this->load('41');
    }

    public function About()
    {
        return $this->load('about');
    }

    public function Portfolio()
    {
        $api = new Portfolio();
        $projects = $api->listProjects();
        $this->data['projects'] = $projects;
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

    public function Alice()
    {
        $met = strtotime("2023-07-02");
        $end = strtotime("2023-08-28");
        $restarted = strtotime("2023-11-26");
        $now = time();

        $diff_seconds_1 = abs($met - $end);
        $diff_minutes_1 = round($diff_seconds_1 / 60, 2);
        $diff_hours_1 = round($diff_seconds_1 / (60 * 60), 2);
        $diff_days_1 = round($diff_seconds_1 / (60 * 60 * 24), 2);
        $diff_months_1 = round($diff_seconds_1 / (60 * 60 * 24 * 30.4), 2);
        $diff_years_1 = $diff_seconds_1 / (60 * 60 * 24 * 365.25);
        $this->data['first']['seconds'] = $diff_seconds_1;
        $this->data['first']['minutes'] = $diff_minutes_1;
        $this->data['first']['hours'] = $diff_hours_1;
        $this->data['first']['days'] = $diff_days_1;
        $this->data['first']['months'] = $diff_months_1;
        $this->data['first']['years'] = $diff_years_1;

        $diff_seconds_2 = abs($restarted - $now);
        $diff_minutes_2 = round($diff_seconds_2 / 60, 2);
        $diff_hours_2 = round($diff_seconds_2 / (60 * 60), 2);
        $diff_days_2 = round($diff_seconds_2 / (60 * 60 * 24), 2);
        $diff_months_2 = round($diff_seconds_2 / (60 * 60 * 24 * 30.4), 2);
        $diff_years_2 = $diff_seconds_2 / (60 * 60 * 24 * 365.25);
        $this->data['last']['seconds'] = $diff_seconds_2;
        $this->data['last']['minutes'] = $diff_minutes_2;
        $this->data['last']['hours'] = $diff_hours_2;
        $this->data['last']['days'] = $diff_days_2;
        $this->data['last']['months'] = $diff_months_2;
        $this->data['last']['years'] = $diff_years_2;

        $api = new Movies();
        $this->data['movies'] = $api->get();

        return $this->load('alice');
    }
}
