<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function fun($kiek, $abc = 'dramblys')
    {
        $mas = ['Asilas', 'Karvius', 'Kalakutas', 'Bulius'];
        return view('kitkas.fun', [
            'abc' => $abc,
            'mas' => $mas
            ] );
    }
}
