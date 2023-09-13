<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       
        $sale=Sale::all();
        return view('sales.index',compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $product=product::select('name')->get();
         return view('sales.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user_id=Auth::id();
    

         $saleData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
        ]);


        $sale = new Sale;
        $sale->name=$saleData['name'];
        $sale->quantity=$saleData['quantity'];
        $sale->price=$saleData['price'];
        $sale->user_id=$user_id;

        $sale->save();


        
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sale=Sale::find($id);
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sale=Sale::find($id);
        return view('sales.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $saleData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',
        ]);

        $sale=Sale::find($id);
        $sale->update($saleData);
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sale=Sale::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
