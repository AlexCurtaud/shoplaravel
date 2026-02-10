<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 1,
                'name' => 'KIMBO 95',
                'slug' => 'kimbo-95',
                'price' => 699.95,
                'stock' => 15,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'STRANGER 100',
                'slug' => 'stranger-100',
                'price' => 699.95,
                'stock' => 10,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'EDOLLO 91',
                'slug' => 'edollo-91',
                'price' => 599.95,
                'stock' => 3,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'ARV 100',
                'slug' => 'arv-100',
                'price' => 599.95,
                'stock' => 22,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'ARV 106',
                'slug' => 'arv-106',
                'price' => 649.95,
                'stock' => 9,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'HORIZON',
                'slug' => 'horizon',
                'price' => 549.00,
                'stock' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'COVERT',
                'slug' => 'covert',
                'price' => 749.00,
                'stock' => 5,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'EXPERIMENT',
                'slug' => 'experiment',
                'price' => 649.00,
                'stock' => 10,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'CORTEX 130',
                'slug' => 'cortex-130',
                'price' => 780.00,
                'stock' => 15,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'CORTEX 140',
                'slug' => 'cortex-140',
                'price' => 850.00,
                'stock' => 2,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'INVADO PRO',
                'slug' => 'invado-pro',
                'price' => 349.95,
                'stock' => 7,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'name' => 'AURA PRO',
                'slug' => 'aura-pro',
                'price' => 369.95,
                'stock' => 9,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'CANVAS CAP',
                'slug' => 'canvas-cap',
                'price' => 55.00,
                'stock' => 21,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'name' => 'HARLEM CAP',
                'slug' => 'harlem-cap',
                'price' => 39.00,
                'stock' => 26,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
