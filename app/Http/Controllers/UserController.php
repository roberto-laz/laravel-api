<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();
        return response()->json(compact('users'));
    }

    public function create(Request $request): JsonResponse
    {
        $message = User::create($request->all()) ?
            "User created successfully" :
            "An error has ocurred when creating a new user";

        return response()->json($message);
    }

    public function find(int $id): JsonResponse
    {
        $user = User::find($id);
        return response()->json(compact('user'));
    }

    public function update(Request $request, int $id): JsonResponse
    {
        $message = User::find($id)->update($request->all()) ?
            "User updated" : "User not found";
        return response()->json($message);

    }

    public function delete(int $id): JsonResponse
    {
        $message = User::destroy($id) ? "User deleted" : "User not found";
        return response()->json($message);
    }
}
