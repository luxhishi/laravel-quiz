<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function submitForm(Request $request) {

        $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users'
    ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return response()->json([
            'message' => 'User submitted successfully',
            'user' => $user
        ],201);
        
    }
}
