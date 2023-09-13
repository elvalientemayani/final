<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $order=Order::all();
        return view('orders.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $orderData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
            
        ]);

        order::create($orderData);
        return redirect()->route('orders.index')->with('success', 'order added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $order=Order::find($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $order=order::find($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $orderData=$request->validate([
            'name'=>'required',
            'quantity'=>'required|numeric',
        ]);

        $order=order::find($id);
        $order->update($orderData);

        return redirect()->route('orders.index')->with('success', 'order updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order=order::find($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'order deleted successfully');
    }
}
