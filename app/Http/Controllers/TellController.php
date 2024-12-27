<?php

namespace App\Http\Controllers;

use App\Models\Tell;
use Illuminate\Http\Request;

class TellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Tell::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tell=Tell::create($request->all());
        return response()->json($tell);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tell=Tell::find($id);
        return response()->json($tell);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
