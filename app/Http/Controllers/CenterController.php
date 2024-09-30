<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasb;
use App\Center;

class CenterController extends Controller
{
    public function index() {

        $get = Center::all();

        return view('center', [
            'centers'=>$get,
        ]);
    }

    public function center($id) {

        $ol = Kasb::where('center_id', $id)->first();
        return view('kasb', [
            'kasbs'=>$ol,
        ]);
    }


}
