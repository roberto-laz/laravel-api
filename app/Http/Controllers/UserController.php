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

    public function find(int $id): JsonResponse
    {
        $user = User::find($id);
        return response()->json(compact('user'));
    }

    public function delete(int $id): JsonResponse
    {
        $user = User::destroy($id);
        //return response()->json($user ? "User deleted" : "User not found");
        $message = "User not found";
        if ($user) $message = "User deleted";
        return response()->json($message);

    }
}
