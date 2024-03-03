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
    return view('home');
  }

  public function About()
  {
    return view('about');
  }

  public function Portfolio()
  {
    $data['projects'] = $this->json->get('portfolio.json');
    return view('portfolio', $data);
  }

  public function Library()
  {
    $data['library'] = $this->json->get('library.json');
    return view('library', $data);
  }

  public function Contact()
  {
    return view('contact');
  }

  public function Alice()
  {
    $data = [];
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
    $data['first']['seconds'] = $diff_seconds_1;
    $data['first']['minutes'] = $diff_minutes_1;
    $data['first']['hours'] = $diff_hours_1;
    $data['first']['days'] = $diff_days_1;
    $data['first']['months'] = $diff_months_1;
    $data['first']['years'] = $diff_years_1;

    $diff_seconds_2 = abs($restarted - $now);
    $diff_minutes_2 = round($diff_seconds_2 / 60, 2);
    $diff_hours_2 = round($diff_seconds_2 / (60 * 60), 2);
    $diff_days_2 = round($diff_seconds_2 / (60 * 60 * 24), 2);
    $diff_months_2 = round($diff_seconds_2 / (60 * 60 * 24 * 30.4), 2);
    $diff_years_2 = $diff_seconds_2 / (60 * 60 * 24 * 365.25);
    $data['last']['seconds'] = $diff_seconds_2;
    $data['last']['minutes'] = $diff_minutes_2;
    $data['last']['hours'] = $diff_hours_2;
    $data['last']['days'] = $diff_days_2;
    $data['last']['months'] = $diff_months_2;
    $data['last']['years'] = $diff_years_2;

    $api = new Movies();
    $data['movies'] = $api->get();

    return view('alice');
  }
}
