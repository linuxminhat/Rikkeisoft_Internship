<?php

namespace App\Controllers;


class ErrorController
{
    /*
     * 404 not found error
     *
     */

    public static function notFound($message = 'Page not found')
    {
        http_response_code(404);

        loadView('error', [
            'status' => '404',
            'message' => $message
        ]);

    }

    /*
    * 403 unauthorized error
    *
    */

    public static function unaothorized($message = 'Unauthorized access')
    {
        http_response_code(403);

        loadView('error', [
            'status' => '403',
            'message' => $message
        ]);

    }
}
