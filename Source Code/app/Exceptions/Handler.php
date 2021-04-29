<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
    }
}
// namespace App\Exceptions;

// // use Exception;
// use Illuminate\Auth\AuthenticationException;
// use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use Throwable;

// class Handler extends ExceptionHandler
// {
//     /**
//      * A list of the exception types that are not reported.
//      *
//      * @var array
//      */
//     protected $dontReport = [
//         \Illuminate\Auth\AuthenticationException::class,
//         \Illuminate\Auth\Access\AuthorizationException::class,
//         \Symfony\Component\HttpKernel\Exception\HttpException::class,
//         \Illuminate\Database\Eloquent\ModelNotFoundException::class,
//         \Illuminate\Session\TokenMismatchException::class,
//         \Illuminate\Validation\ValidationException::class,
//     ];

//     protected $dontFlash = [
//         'password',
//         'password_confirmation',
//     ];

//     public function report(Throwable $exception)
//     {
//         parent::report($exception);
//     }

//     public function render($request, Throwable $exception)
//     {
//         return parent::render($request, $exception);
//     }

//     protected function unauthenticated($request, AuthenticationException $exception)
//     {
//         if ($request->expectsJson()) {
//             return response()->json(['error' => 'Unauthenticated.'], 401);
//         }

//         // $guard = array_get($exception->guards(), 0);
//         $guard = Array($exception->guards(), 0);

//         switch ($guard) {
//             case 'admin':
//                 $login = 'admin.login';
//                 break;
//             default:
//                 $login = 'login';
//                 break;
//         }
//         return redirect()->guest(route($login));
//     }
// } 

// namespace App\Exceptions;

// use Exception;
// use Illuminate\Auth\AuthenticationException;
// use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
// use Illuminate\Support\Arr;
// class Handler extends ExceptionHandler
// {
   
//     protected $dontReport = [
      
//     ];

//     public function report(Exception $exception)
//     {
//         parent::report($exception);
//     }

    
//     public function render($request, Exception $exception)
//     {
//         return parent::render($request, $exception);
//     }

  
//     protected function unauthenticated($request, AuthenticationException $exception)
//     {
//         if ($request->expectsJson()) {
//             return response()->json(['error' => 'Unauthenticated.'], 401);
//         }

//         $guard = Arr::get($exception->guards(), 0);

//        switch ($guard) {
//          case 'admin':
//            $login='admin.login';
//            break;

//          default:
//            $login='login';
//            break;
//        }

//         return redirect()->guest(route($login));
//     }
// }

// namespace App\Exceptions;
// use Throwable;
// use Illuminate\Auth\AuthenticationException;
// use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

// class Handler extends ExceptionHandler
// {
//     /**
//      * A list of the exception types that should not be reported.
//      *
//      * @var array
//      */
//     protected $dontReport = [
//         \Illuminate\Auth\AuthenticationException::class,
//         \Illuminate\Auth\Access\AuthorizationException::class,
//         \Symfony\Component\HttpKernel\Exception\HttpException::class,
//         \Illuminate\Database\Eloquent\ModelNotFoundException::class,
//         \Illuminate\Session\TokenMismatchException::class,
//         \Illuminate\Validation\ValidationException::class,
//     ];
//     /**
//      * Report or log an exception.
//      *
//      * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
//      *
//      * @param  \Exception  $exception
//      * @return void
//      */
//     public function report(Throwable $exception)
//     {
//         parent::report($exception);
//     }
//     /**
//      * Render an exception into an HTTP response.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \Exception  $exception
//      * @return \Illuminate\Http\Response
//      */
//     public function render($request, Throwable $exception)
//     {
//         return parent::render($request, $exception);
//     }
//     protected function unauthenticated($request, AuthenticationException $exception)
//     {
//         if ($request->expectsJson()) {
//             return response()->json(['error' => 'Unauthenticated.'], 401);
//         }
//         $guard=Array($exception->guards(),0);
//         switch ($guard) {
//             case 'admin':
//             $login='admin.login';
//             break;

//             default:
//             $login='login';
//             break;
//         }
//         return  redirect()->guest(route($login));
//     }
// }