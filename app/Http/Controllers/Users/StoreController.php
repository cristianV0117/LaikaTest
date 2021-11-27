<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostUserRequest;
use App\Helpers\Response;
use App\Repositories\Writetable;

final class StoreController extends Controller
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

    public function __invoke(PostUserRequest $request)
    {
        return response()->json($this->response->response(
            201,
            false, 
            $this->repository->save($request),
            $this->dependencies,
            null
        ), 201);
    }
}
