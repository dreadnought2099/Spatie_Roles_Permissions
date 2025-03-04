<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;
use Symfony\Component\HttpFoundation\Response;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            if ($request->header('HX-Request')) {
                return response()->view('errors.minimal', ['exception' => $exception], Response::HTTP_FORBIDDEN);
            }

            return response()->view('errors.minimal', ['exception' => $exception], Response::HTTP_FORBIDDEN);
        }
        return parent::render($request, $exception);
    }
}
