<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    public function index()
    {
        return Factura::all();
    }

    public function store(Request $request)
    {
        $factura = Factura::create($request->all());
        return response()->json($factura, 201);
    }

    public function show($id)
    {
        return Factura::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $factura = Factura::findOrFail($id);
        $factura->update($request->all());
        return response()->json($factura, 200);
    }

    public function destroy($id)
    {
        Factura::destroy($id);
        return response()->json(null, 204);
    }
}
