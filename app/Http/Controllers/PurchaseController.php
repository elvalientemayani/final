<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\purchase;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $purchase=purchase::all();
        return view('Purchases.index',compact('purchase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $product=product::select('name')->get();
         return view('purchases.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id=Auth::id();
        $purchaseData=$request->validate([
           'name'=>'required',
           'quantity'=>'required|numeric',
           'price'=>'required|numeric',
       ]);

       $purchase = new purchase();
       $purchase->name=$purchaseData['name'];
       $purchase->quantity=$purchaseData['quantity'];
       $purchase->price=$purchaseData['price'];
       $purchase->user_id=$user_id;
       $purchase->save();        
       return redirect()->route('purchases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $purchase=purchase::find($id);
        return view('Purchases.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $purchase=purchase::find($id);
        return view('Purchases.edit', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $purchaseData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            'price'=>'required|numeric',

        ]);
        $purchase=purchase::find($id);
        $purchase->update($purchaseData);
        return redirect()->route('purchases.index')->with('success', 'purchase updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $purchase=purchase::find($id);
        $purchase->delete();
        return redirect()->route('purchases.index')->with('success', 'purchase deleted succesfully');

    }
}
