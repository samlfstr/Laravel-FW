<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    //<editor-fold desc="_Register">
    public function register(Request $request)
    {
        /** @var User $user */
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);

        if ($validator->fails()) {
            return response($validator->messages()->toArray(), 400);
        }
        $user = user::where('email', $request['email'])->exists();
        if ($user) {
            return response(['message' => 'User already exists!']);
        } else {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password'])
            ]);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }


    //</editor-fold>
    //<editor-fold desc="_SignIn">
    public function login(Request $request)
    {
        /** @var User $user */
        if (
        Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            $user = Auth::user();
            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token
            ];

            return response($response);
        } else {
            return response(['message' => 'Unauthorised!']);
        }
    }

    //</editor-fold>


    //<editor-fold desc="_Logout">
    public function logout()
    {
        // Get user who requested the logout
        $user = request()->user(); //or Auth::user()
        // Revoke current user token
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
    }
    //</editor-fold>
}
