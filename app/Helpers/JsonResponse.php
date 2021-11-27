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

    public function response(int $status, bool $error, string|array|null $response, ?array $dependencies): array
    {
        return $this->responseStrcuture = [
            "status"      => $status,
            "error"       => $error,
            "message"     => $response
        ];
    }
}