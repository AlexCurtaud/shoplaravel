<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $boutique = [
            'name' => 'Solid Snow Shop',
            'productNumber' => 123,
            'shopState' => true
        ];

      return view('home', ['boutique' => $boutique]);
    }

    public function contact() {
        return view('contact');
    }
}

