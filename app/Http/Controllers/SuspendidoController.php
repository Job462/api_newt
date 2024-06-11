<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suspendido;

class SuspendidoController extends Controller
{
    public function index()
    {
        return Suspendido::all();
    }

    public function store(Request $request)
    {
        $suspendido = Suspendido::create($request->all());
        return response()->json($suspendido, 201);
    }

    public function show($id)
    {
        return Suspendido::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $suspendido = Suspendido::findOrFail($id);
        $suspendido->update($request->all());
        return response()->json($suspendido, 200);
    }

    public function destroy($id)
    {
        Suspendido::destroy($id);
        return response()->json(null, 204);
    }
}
