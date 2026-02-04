<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Ski',
                'slug' => 'ski',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Snowboard',
                'slug' => 'snowboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ski Boots',
                'slug' => 'ski-boots',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Snowboard Boots',
                'slug' => 'snowboard-boots',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caps',
                'slug' => 'caps',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
