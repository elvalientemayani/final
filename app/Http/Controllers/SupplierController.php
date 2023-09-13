<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('suppliers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $supplierData=$request->validate([
            'name'=>'required',
        ]);

        supplier::create($supplierData);
        return redirect()->route('suppliers.index')->with('success', 'supplier added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $supplier=supplier::find($id);
        return view('suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $supplier=supplier::find($id);
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $supplierData=$request->validate([
            'name'=>'required',
        ]);

        $supplier=supplier::find($id);
        $supplier->update($supplierData);

        return redirect()->route('suppliers.index')->with('success', 'supplier updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $supplier=Supplier::find($id);
        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success', 'supplier deleted successfully');
    }
}
