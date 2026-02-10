<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->has(['name', 'description', 'price', 'stock', 'category_id'])) {
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                // 'image' => $request->file('image')->store('products', 'public'),
                'stock' => $request->input('stock', 0),
                'active' => $request->input('active', 0),
                'category_id' => $request->category_id,
            ]);
            if ($request->hasFile('image')) {
                $product->image = $request->file('image')->store('products', 'public');
                $product->save();
            } else {
            }

            return redirect(route('products.index'))->with('success', 'Product Added');
        } else {
            return back()->withInput()->with('error', 'Missing or wrong datas, try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);

        return view('products.show', ['product' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);

        return view('products.edit', ['product' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->has(['name', 'description', 'price', 'stock', 'category_id'])) {
            $product = Product::find($id)->update(
                ['name' => $request->name,
                    'description' => $request->description,
                    'price' => $request->price,
                    'stock' => $request->input('stock', 0),
                    'active' => $request->input('active', 0),
                    'category_id' => $request->category_id,
                ]);
            if ($request->hasFile('image')) {
                $path = $request->file('image')->store('products', 'public');
                $product->image = $path;
            } else {
            }

            return redirect(route('products.index'))->with('success', 'Product Updated');
        } else {
            return back()->withInput()->with('error', 'Missing or wrong datas, try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect(route('products.index'))->with('success', 'Product Added');
    }
}
