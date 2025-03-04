<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        return response()->json(Crud::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crud=Crud::create($request->all());
        return response()->json($crud);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud=Crud::find($id);
        if(!$crud){
            return response()->json("nodurust");
        }
        return response()->json($crud);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'=>'required|max:255',
            'nasab'=>'required|max:255'
        ]);
        $crud=Crud::find($id);
        $crud->update([
            "nom"=>$request->nom,
            "nasab"=>$request->nasab
        ]);
        return response()->json($crud);
    }

    public function destroy(string $id)
    {
        $crud=Crud::find($id);
        if(!$crud){
            return response()->json("nodurust");
        }
        $crud->delete();
        return response()->json("OK");
    }
}
