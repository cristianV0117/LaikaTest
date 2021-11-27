<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Response;

final class HomeController extends Controller
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function __invoke()
    {
        return response()->json($this->response->response([
            "saludo" => "hola mundo"
        ]));
    }
}
