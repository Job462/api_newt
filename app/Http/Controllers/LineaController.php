<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Linea;

class LineaController extends Controller
{
    public function index()
    {
        return Linea::all();
    }

    public function store(Request $request)
    {
        $linea = Linea::create($request->all());
        return response()->json($linea, 201);
    }

    public function show($id)
    {
        return Linea::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $linea = Linea::findOrFail($id);
        $linea->update($request->all());
        return response()->json($linea, 200);
    }

    public function destroy($id)
    {
        Linea::destroy($id);
        return response()->json(null, 204);
    }
}
