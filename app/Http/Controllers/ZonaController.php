<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zona;

class ZonaController extends Controller
{
    public function index()
    {
        return Zona::all();
    }

    public function store(Request $request)
    {
        $zona = Zona::create($request->all());
        return response()->json($zona, 201);
    }

    public function show($id)
    {
        return Zona::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $zona = Zona::findOrFail($id);
        $zona->update($request->all());
        return response()->json($zona, 200);
    }

    public function destroy($id)
    {
        Zona::destroy($id);
        return response()->json(null, 204);
    }
}
