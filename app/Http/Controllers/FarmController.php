<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Farm;


class FarmController extends Controller
{
    public function index()
    {
        return Farm::all();
    }

    public function show(Farm $farm)
    {
        return $farm;
    }

    public function store(Request $request)
    {
        $farm = Farm::create($request->all());

        return response()->json($farm, 201);
    }

    public function update(Request $request, Farm $article)
    {
        $farm->update($request->all());

        return response()->json($farm, 200);
    }

    public function delete(Farm $article)
    {
        $farm->delete();

        return response()->json(null, 204);
    }
}