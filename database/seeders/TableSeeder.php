<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tables')->insert([
            'number' => 001,
        ]);
        DB::table('tables')->insert([
            'number' => 002,
        ]);
        DB::table('tables')->insert([
            'number' => 003,
        ]);
        DB::table('tables')->insert([
            'number' => 004,
        ]);
        DB::table('tables')->insert([
            'number' => 005,
        ]);
        DB::table('tables')->insert([
            'number' => 006,
        ]);
        DB::table('tables')->insert([
            'number' => 007,
        ]);
    }
}
