<?php

namespace BazaarCorner\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
    * The application's global HTTP middleware stack.
    *
    * @var array
    */
   protected $middleware = [
        'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
        'Illuminate\Cookie\Middleware\EncryptCookies',
        'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
        'Illuminate\Session\Middleware\StartSession',
        'Illuminate\View\Middleware\ShareErrorsFromSession',
        'BazaarCorner\Http\Middleware\VerifyCsrfToken',
   ];

   /**
    * The application's route middleware.
    *
    * @var array
    */
   protected $routeMiddleware = [
        'auth' => 'BazaarCorner\Http\Middleware\Authenticate',
        'auth.merchant' => 'BazaarCorner\Http\Middleware\AuthorizedIfMerchant',
        'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
        'guest' => 'BazaarCorner\Http\Middleware\RedirectIfAuthenticated',
   ];
}
