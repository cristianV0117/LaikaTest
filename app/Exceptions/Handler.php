<?php

namespace App\Exceptions;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof Users\UserException
        ) {
            $classTemporally = new \ReflectionClass(get_class($e));
            $class = explode('\\', $classTemporally->getName());
            $json = [
                'status' => $e->getCode(),
                'error'  => true,
                'class'  => $class[2],
                'message'=> $e->getMessage()
            ];
            return response()->json($json, $e->getCode());
        }
        return parent::render($request, $e);
    }
}
