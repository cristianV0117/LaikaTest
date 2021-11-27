<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\Repositories\Readable;

final class CountryRepository implements Readable
{
    public function getAll(): array
    {
        return DB::select('CALL get_all_countries()');
    }

    public function getOne(int $id): array
    {
        return DB::select('CALL get_one_country('.$id.')');
    }
}