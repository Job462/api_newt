<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        return Plan::all();
    }

    public function store(Request $request)
    {
        $plan = Plan::create($request->all());
        return response()->json($plan, 201);
    }

    public function show($id)
    {
        return Plan::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $plan = Plan::findOrFail($id);
        $plan->update($request->all());
        return response()->json($plan, 200);
    }

    public function destroy($id)
    {
        Plan::destroy($id);
        return response()->json(null, 204);
    }
}
