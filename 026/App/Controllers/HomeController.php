<?php

namespace App\Controllers;

use App\App;
use App\DB\Json;

class HomeController
{

    public function home()
    {
        Json::connect();

        $title = 'H-O-M-E';
        $welcome = 'Hello from fancy zoo!';
        return  App::view('home', ['title' => $title, 'welcome' => $welcome]);
    }
}
