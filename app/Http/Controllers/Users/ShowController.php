<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Helpers\Response;
use App\Repositories\Readable;

class ShowController extends Controller
{
    private $response;
    private $dependencies;
    private $repository;

    public function __construct(Response $response, Readable $repository)
    {
        $this->response = $response;
        $this->repository = $repository;
        $this->dependencies = [
            "current" => 'users/'
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
