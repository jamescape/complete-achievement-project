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
        $user = Achievement::create($request->all());

        return response()->json($user, 201);
    }

    public function delete($id)
    {
        $user = Achievement::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Deleted sucessfully.'], 201);
    }

    public function update($id, Request $request)
    {
        $user = Achievement::findOrFail($id);
        $user->upadate($request->all());

        return response()->json($user, 200);
    }
}
