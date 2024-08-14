<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function register(Request $request) {
        return $request->all();
    }

    public function login(Request $request) {

    }
}
