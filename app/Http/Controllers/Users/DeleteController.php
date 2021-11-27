<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Helpers\Response;
use App\Repositories\Writetable;

class DeleteController extends Controller
{

    private $response;
    private $dependencies;
    private $repository;

    public function __construct(Response $response, Writetable $repository)
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
            $this->repository->delete($id),
            $this->dependencies,
            $id
        ), 200);
    }
}
