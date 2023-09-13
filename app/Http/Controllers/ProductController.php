<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product=product::all();
        return view('Products.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $productData=$request->validate([
            'name'=>'required',
            'unit'=>'required',
        ]);

        product::create($productData);
        return redirect()->route('product.index')->with('success', 'product added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product=product::find($id);
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product=product::find($id);
        return view('Products.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $productData=$request->validate([
            'name'=>'required',
            'unit'=>'required',
            
        ]);

        $product=product::find($id);
        $product->update($productData);

        return redirect()->route('product.index')->with('success', 'product updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product=product::find($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'product deleted successfully');
    }
}
