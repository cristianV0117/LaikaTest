<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostUserRequest;
use Illuminate\Http\Request;
use App\Helpers\Response;
use App\Repositories\Writetable;

class StoreController extends Controller
{
    private $response;
    private $repository;

    public function __construct(Response $response, Writetable $repository)
    {
        $this->response = $response;
        $this->repository = $repository;
    }

    public function __invoke(PostUserRequest $request)
    {
        dd($request->all());
    }
}
