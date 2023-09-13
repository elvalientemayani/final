<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stock=Stock::with('product')->get();
        return view('stocks.index',compact('stock'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('stocks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $stockData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            
        ]);

        Stock::create($stockData);
        return redirect()->route('stocks.index')->with('success', 'stock added succesfully');
    }


    // public function purchase(product $product){

    //     $validatedData=request()->validate([
    //         'quantity'=>'required|numeric|min:1',
    //     ]);

    //     $product->increment('quantity',$validatedData['quantity']);

    //     return redirect('/stocks');
    // }

    // public function sale(product $product){

    //     $validatedData=request()->validate([
    //         'quantity'=>'required|numeric|min:1',
    //     ]);

    //     $product->decrement('quantity',$validatedData['quantity']);

    //     return redirect('/stocks');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $stock=stock::find($id);
        return view('stocks.show', compact('stock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $stock=stock::find($id);
        return view('stocks.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $stockData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            
        ]);

        $stock=stock::find($id);
        $stock->update($stockData);

        return redirect()->route('stocks.index')->with('success', 'stock updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $stock=stock::find($id);
        $stock->delete();

        return redirect()->route('stocks.index')->with('success', 'stock deleted successfully');
    }
}
