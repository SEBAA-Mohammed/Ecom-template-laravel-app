<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->view('error', ['msg' => 'Page not found', 'err' => 404]);
        }

        if ($exception instanceof AccessDeniedHttpException) {
            return response()->view('error', ['msg' => 'Access denied', 'err' => 403]);
        }

        if ($exception instanceof UnauthorizedHttpException) {
            return response()->view('error', ['msg' => 'Unauthorized', 'err' => 401]);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            return response()->view('error', ['msg' => 'Method not allowed', 'err' => 405]);
        }

        if ($exception instanceof TooManyRequestsHttpException) {
            return response()->view('error', ['msg' => 'Too many requests', 'err' => 429]);
        }

        if ($exception instanceof UnsupportedMediaTypeHttpException) {
            return response()->view('error', ['msg' => 'Unsupported media type', 'err' => 415]);
        }

        if ($exception instanceof UnprocessableEntityHttpException) {
            return response()->view('error', ['msg' => 'Unprocessable entity', 'err' => 422]);
        }

        if ($exception instanceof ServiceUnavailableHttpException) {
            return response()->view('error', ['msg' => 'Service unavailable', 'err' => 503]);
        }

        return parent::render($request, $exception);
    }
}
