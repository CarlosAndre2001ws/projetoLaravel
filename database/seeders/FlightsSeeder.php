<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('flights')->insert([
            'name' => Str::random(10),
            'airline' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
