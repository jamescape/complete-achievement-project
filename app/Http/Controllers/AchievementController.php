<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    public function index()
    {
        return Achievement::all();
    }

    public function show(string $id)
    {
        $achievement = Achievement::findOrFail($id);

        return response()->json($achievement, 200);
    }

    public function store(Request $request)
    {
        $achievement = Achievement::create($request->all());

        return response()->json($achievement, 201);
    }

    public function delete($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        return response()->json(['message' => 'Deleted sucessfully.'], 201);
    }

    public function update($id, Request $request)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->update($request->all());

        return response()->json($achievement, 200);
    }
}
