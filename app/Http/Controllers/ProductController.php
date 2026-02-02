<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $id)
    {
        return 'Afficher le produit n° ' . $id;
    }

    public function index() {
        return 'Tous les produits';
    }
}
