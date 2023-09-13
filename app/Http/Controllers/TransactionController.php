<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transaction=Transaction::all();
        return view('transactions.index',compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('transactions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $transactionData=$request->validate([
           
        ]);

        Transaction::create($transactionData);
        return redirect()->route('transactions.index')->with('success', 'transaction added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $transaction=transaction::find($id);
        return view('transactions.show', compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $transaction=transaction::find($id);
        return view('transactions.edit', compact('transaction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $transactionData=$request->validate([
           
        ]);

        $transaction=transaction::find($id);
        $transaction->update($transactionData);

        return redirect()->route('transactions.index')->with('success', 'transaction updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $transaction=transaction::find($id);
        $transaction->delete();

        return redirect()->route('transactions.index')->with('success', 'transaction deleted successfully');
    }
}
