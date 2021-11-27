<?php

namespace App\Http\Controllers;

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
        return response()->json($this->response->response(200, false, [
            "over" => "LAIKA API APP",
			"home" => "Bienvenido",
            "version" => "1.0.1",
        ], ['current' => ''], null), 200);
    }
}
