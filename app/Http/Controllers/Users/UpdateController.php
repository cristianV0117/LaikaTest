<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\PutUserRequest;
use App\Helpers\Response;
use App\Repositories\Writetable;

class UpdateController extends Controller
{
    private $response;
    private $repository;
    private $dependencies;

    public function __construct(Response $response, Writetable $repository)
    {
        $this->response = $response;
        $this->repository = $repository;
        $this->dependencies = [
            "current" => 'users/'
        ];
    }

    public function __invoke(PutUserRequest $request, int $id)
    {
        return response()->json($this->response->response(
            200,
            false, 
            $this->repository->update($request, $id),
            $this->dependencies,
            null
        ), 200);
    }
}
