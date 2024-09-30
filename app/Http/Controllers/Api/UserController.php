<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
   /**
    * Issues an auth token to the user
    *
    * @return \Illuminate\Http\Response
    */
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
   public function login(Request $request)
   {
       $request->validate([
           'email' => 'required|email',
           'password' => 'required',
           'name' => 'required',
       ]);

       $user = User::where('email', $request->email)->first();

       if (! $user || ! Hash::check($request->password, $user->password)) {
           throw ValidationException::withMessages([
               'email' => ['The provided credentials are incorrect.'],
           ]);
       }

       return response()->json([
           'token' => $user->createToken($request->name)->plainTextToken,
       ]);
   }

   /**
    * Revokes the user's access token
    *
    * @return \Illuminate\Http\Response
    */
   public function logout(Request $request)
   {
       $request->user()->currentAccessToken()->delete();
       return response()->noContent();
   }
}
