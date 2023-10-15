<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courts')->insert(['name' => 'Tenis - 1']);
        DB::table('courts')->insert(['name' => 'Tenis - 2']);
        DB::table('courts')->insert(['name' => 'Padel - 1']);
        DB::table('courts')->insert(['name' => 'Padel - 2']);
    }
}
