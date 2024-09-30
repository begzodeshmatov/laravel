<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

Route::middleware('auth:sanctum')->get('/peoples', 'XabarController@peoples');
Route::middleware('auth:sanctum')->get('/users', 'XabarController@users');
Route::middleware('auth:sanctum')->get('/bannernew', 'XabarController@bannernew');
Route::middleware('auth:sanctum')->get('/elonnew', 'XabarController@elonnew');
Route::middleware('auth:sanctum')->get('/information', 'XabarController@information');
Route::middleware('auth:sanctum')->get('/navbarnew', 'XabarController@navbarnew');
Route::middleware('auth:sanctum')->get('/yangiliknew', 'XabarController@yangiliknew');
Route::middleware('auth:sanctum')->get('/kursnew', 'XabarController@kursnew');

Route::post('/users', function(Request $request) {
    $data = $request->validate([
        'email'=>'required',
        'password'=>'required',
    ]);

    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ],404);
    }
 
    return $user->createToken('my-token')->plainTextToken;
});

