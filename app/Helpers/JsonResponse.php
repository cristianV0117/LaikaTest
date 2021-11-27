<?php

namespace App\Helpers;
use App\Helpers\Response;

final class JsonResponse implements Response
{

    private $responseStrcuture;

    public function __construct()
    {
        $this->responseStrcuture = [];
    }

    public function response(string|array|null $response): array
    {
        return $this->responseStrcuture = [
            "message"     => $response
        ];
    }
}