<?php

namespace App\Helpers;

interface Response
{
    public function response(int $status, bool $error, string|array|null $response, ?array $dependencies, ?int $id): array;
}