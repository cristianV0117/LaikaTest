<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Helpers\Response;
use App\Repositories\Readable;

final class IndexController extends Controller
{
    private $response;
    private $dependencies;
    private $repository;

    public function __construct(Response $response, Readable $repository)
    {
        $this->response = $response;
        $this->repository = $repository;
        $this->dependencies = [
            "current" => 'countries/'
        ];
    }

    public function __invoke()
    {
        return response()->json($this->response->response(
            200,
            false, 
            $this->repository->getAll(),
            $this->dependencies,
            null
        ), 200);
    }
}
