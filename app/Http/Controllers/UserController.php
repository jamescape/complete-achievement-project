<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return response()->json($users, 200);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json($user, 200);
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Deleted sucessfully.'], 201);
    }

    public function update($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->upadate($request->all());

        return response()->json($user, 200);
    }
}