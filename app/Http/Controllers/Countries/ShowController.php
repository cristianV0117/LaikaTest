<?php

namespace App\Http\Controllers\Countries;

use App\Http\Controllers\Controller;
use App\Helpers\Response;
use App\Repositories\Readable;

final class ShowController extends Controller
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

    public function __invoke(int $id)
    {
        return response()->json($this->response->response(
            200,
            false, 
            $this->repository->getOne($id),
            $this->dependencies,
            $id
        ), 200);
    }
}
