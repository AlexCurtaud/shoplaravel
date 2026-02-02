<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return redirect()->route('products.show', ['id' => 1]);
    }

    public function about()
    {
        return "An original shop where you will find core equipment that relate freeski and snowboard culture";
    }
}
