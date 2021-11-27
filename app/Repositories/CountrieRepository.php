<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Repositories\Readable;

final class CountrieRepository implements Readable
{
    public function getAll(): array
    {
        return DB::select('CALL get_all_countries()');
    }

    public function getOne(int $id): array
    {
        return [];
    }
}