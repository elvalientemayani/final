<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('reports.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $reportData=$request->validate([
            
        ]);

        report::create($reportData);
        return redirect()->route('reports.index')->with('success', 'report added succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $report=Report::find($id);
        return view('reports.show', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $report=report::find($id);
        return view('reports.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $reportData=$request->validate([
            
        ]);

        $report=report::find($id);
        $report->update($reportData);

        return redirect()->route('reports.index')->with('success', 'report updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $report=report::find($id);
        $report->delete();

        return redirect()->route('reports.index')->with('success', 'report deleted successfully');
    }
}
