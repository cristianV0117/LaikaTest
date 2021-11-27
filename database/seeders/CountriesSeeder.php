<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    use CountriesList;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::countries() as $value) {
            DB::table('countries')->insert([
                'country' => $value,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
