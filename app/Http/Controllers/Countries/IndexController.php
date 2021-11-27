<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Helpers\Response;

final class IndexController extends Controller
{
    private $response;
    private $dependencies;

    public function __construct(Response $response)
    {
        $this->response = $response;
        $this->dependencies = [
            "current" => 'countries/'
        ];
    }

    public function __invoke()
    {
        return response()->json($this->response->response(
            200,
            false, 
            [
                "hola"
            ],
            $this->dependencies
        ), 200);
    }
}
