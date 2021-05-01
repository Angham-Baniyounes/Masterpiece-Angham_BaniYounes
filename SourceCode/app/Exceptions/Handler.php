<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)) {
            if($exception->getStatusCode() == 404) {
                return response()->view('errors.404', [], 404);
            }
        }
        return parent::render($request, $exception);
    }
}
