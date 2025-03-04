<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function show($status, Request $request)
    {
        $message = $request->query('message', 'An error occurred.');

        return view('errors.minimal', [
            'status' => $status,
            'message' => $message
        ]);
    }
}
