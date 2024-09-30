<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function assignRole(Request $request, $userId)
    {
        $request->validate([
            'role' => 'required|in:user,admin',
        ]);

        $user = User::find($userId);
        if ($user) {
            $user->role = $request->role; 
            $user->save();
            return response()->json([
                'message' => "Role '{$request->role}' assigned successfully."
            ]);
        }
        return response()->json([
            'message' => "User not found."
        ], 404);
    }
    
}

