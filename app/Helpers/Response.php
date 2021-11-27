<?php

namespace App\Helpers;

interface Response
{
    public function response(string|array|null $response): array;
}