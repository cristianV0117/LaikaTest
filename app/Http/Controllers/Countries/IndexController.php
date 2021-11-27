<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Helpers\Response;

final class IndexController extends Controller
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function __invoke()
    {
        return response()->json($this->response->response(
            200,
            false, 
            [
                "hola"
            ],
            null
        ), 200);
    }
}
