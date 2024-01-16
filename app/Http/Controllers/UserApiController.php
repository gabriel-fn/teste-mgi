<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserApiController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:20|confirmed'
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return response()->json($user, Response::HTTP_OK);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao cadastrar o usuário.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
