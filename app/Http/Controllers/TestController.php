<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke(Request $request)
    {
        

        // return response()->json(['foo' => 'bar'], 200, []);

        /* return response('test', 200, [
            'foo' => 'bar'
        ]); */
    }
}
