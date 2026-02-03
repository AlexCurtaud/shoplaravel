<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
                            //// GETTER /////
    public function index() {
        $products = [
            [
                'id' => 1,
                'name' => 'KIMBO 95',
                'price' => 699.95
            ],
            [
                'id' => 2,
                'name' => 'STRANGER 100',
                'price' => 699.95
            ],
            [
                'id' => 3,
                'name' => 'EDOLLO 91',
                'price' => 599.95
            ],
            [
                'id' => 4,
                'name' => 'ARV 100',
                'price' => 599.95
            ],
            [
                'id' => 5,
                'name' => 'ARV 106',
                'price' => 649.95
            ]
        ];

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
