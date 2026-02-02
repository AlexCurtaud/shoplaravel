<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $boutique = [
            'name' => 'Solid Snow Culture',
            'productNumber' => 123,
            'shopState' => true
        ];

      return view('home', ['boutique => $boutique']);
    }

    public function about()
    {
        return "An original shop where you will find core equipment that relate freeski and snowboard culture";
    }
}
