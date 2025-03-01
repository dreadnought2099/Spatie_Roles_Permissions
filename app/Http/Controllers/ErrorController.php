<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function show403(Request $request) {
        $buttonColor = $request->header('HX-Request') ? 'primary' : 'blue-400';

        return view('errors.403', compact('buttonColor'));
    }

    public function show404(Request $request) {
        $buttonColor2 = $request->header('HX-Request') ? 'primary' : 'blue-400';

        return view('errors.404', compact('buttonColor2'));
    }
}
