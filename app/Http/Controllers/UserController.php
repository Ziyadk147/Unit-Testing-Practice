<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = Users::all();
        return response()->json([
            'users' => $user,
            'message' => 'hello'
        ]);
    }

    public function store(Request $request)
    {
        $user_name = $request->name;
        User::create(['name' => $user_name]);
        return response()->json([
            'message' => 'Data added Successfully'
        ]);
    }
}
