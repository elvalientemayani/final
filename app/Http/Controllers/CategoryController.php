<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories=Category::all();
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categoryData=$request->validate([
            'name'=>'required',
        ]);

        Category::create($categoryData);
        return redirect()->route('categorieses.index')->with('success', 'product added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categories=category::find($id);
        return view('categories.show', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $categories=category::find($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoryData=$request->validate([
            'name'=>'required',
        ]);

        $categories=category::find($id);
        $categories->update($categoryData);

        return redirect()->route('categorieses.index')->with('success', 'category updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categories=category::find($id);
        $categories->delete();

        return redirect()->route('categorieses.index')->with('success', 'category deleted successfully');
    }
}
