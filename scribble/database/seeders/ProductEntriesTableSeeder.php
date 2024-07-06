<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductEntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_entries')->insert([
            //ballpoints pen
            ['ProductID' => 1, 'VariantID' => 2, 'Stock' => 23, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 1, 'VariantID' => 3, 'Stock' => 10, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 1, 'VariantID' => 4, 'Stock' => 18, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 1, 'VariantID' => 5, 'Stock' => 19, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 2, 'VariantID' => 1, 'Stock' => 42, 'Price' => 12000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 3, 'VariantID' => 1, 'Stock' => 20, 'Price' => 42000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 4, 'VariantID' => 1, 'Stock' => 80, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 5, 'VariantID' => 1, 'Stock' => 50, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            //fountain pen
            ['ProductID' => 6, 'VariantID' => 6, 'Stock' => 15, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 6, 'VariantID' => 7, 'Stock' => 13, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 7, 'VariantID' => 1, 'Stock' => 8, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 8, 'VariantID' => 1, 'Stock' => 22, 'Price' => 100000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 9, 'VariantID' => 8, 'Stock' => 30, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 9, 'VariantID' => 9, 'Stock' => 31, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 9, 'VariantID' => 10, 'Stock' => 33, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 9, 'VariantID' => 11, 'Stock' => 34, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 10, 'VariantID' => 12, 'Stock' => 35, 'Price' => 31000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 10, 'VariantID' => 13, 'Stock' => 32, 'Price' => 33000, 'created_at' => now(), 'updated_at' => now()],

            //marker pen
            ['ProductID' => 11, 'VariantID' => 9, 'Stock' => 56, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 11, 'VariantID' => 8, 'Stock' => 58, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 11, 'VariantID' => 10, 'Stock' => 60, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 12, 'VariantID' => 1, 'Stock' => 35, 'Price' => 70000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 13, 'VariantID' => 10, 'Stock' => 30, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 13, 'VariantID' => 9, 'Stock' => 20, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 13, 'VariantID' => 8, 'Stock' => 18, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 13, 'VariantID' => 14, 'Stock' => 25, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 14, 'VariantID' => 11, 'Stock' => 29, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 14, 'VariantID' => 15, 'Stock' => 28, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 14, 'VariantID' => 8, 'Stock' => 38, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 14, 'VariantID' => 16, 'Stock' => 23, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 15, 'VariantID' => 1, 'Stock' => 30, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],

            //specialty pen
            ['ProductID' => 16, 'VariantID' => 10, 'Stock' => 20, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 16, 'VariantID' => 8, 'Stock' => 25, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 17, 'VariantID' => 1, 'Stock' => 65, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 18, 'VariantID' => 1, 'Stock' => 50, 'Price' => 27000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 19, 'VariantID' => 1, 'Stock' => 34, 'Price' => 62000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 20, 'VariantID' => 10, 'Stock' => 74, 'Price' => 31000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 20, 'VariantID' => 8, 'Stock' => 52, 'Price' => 31000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 20, 'VariantID' => 15, 'Stock' => 36, 'Price' => 31000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 21, 'VariantID' => 1, 'Stock' => 80, 'Price' => 14000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 22, 'VariantID' => 1, 'Stock' => 10, 'Price' => 23000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 23, 'VariantID' => 17, 'Stock' => 39, 'Price' => 13500, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 23, 'VariantID' => 10, 'Stock' => 90, 'Price' => 13500, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 24, 'VariantID' => 17, 'Stock' => 100, 'Price' => 38000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 24, 'VariantID' => 18, 'Stock' => 11, 'Price' => 38000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 24, 'VariantID' => 19, 'Stock' => 35, 'Price' => 38000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 25, 'VariantID' => 11, 'Stock' => 230, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 25, 'VariantID' => 10, 'Stock' => 75, 'Price' => 26000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 25, 'VariantID' => 15, 'Stock' => 23, 'Price' => 26000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 25, 'VariantID' => 8, 'Stock' => 100, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 26, 'VariantID' => 20, 'Stock' => 60, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 26, 'VariantID' => 21, 'Stock' => 99, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 26, 'VariantID' => 22, 'Stock' => 24, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 27, 'VariantID' => 1, 'Stock' => 5, 'Price' => 89000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 28, 'VariantID' => 1, 'Stock' => 36, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 29, 'VariantID' => 10, 'Stock' => 90, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 29, 'VariantID' => 11, 'Stock' => 15, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 29, 'VariantID' => 15, 'Stock' => 115, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 30, 'VariantID' => 1, 'Stock' => 20, 'Price' => 46000, 'created_at' => now(), 'updated_at' => now()],
    
            ['ProductID' => 31, 'VariantID' => 1, 'Stock' => 90, 'Price' => 85000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 32, 'VariantID' => 8, 'Stock' => 34, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 32, 'VariantID' => 15, 'Stock' => 24, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 33, 'VariantID' => 1, 'Stock' => 60, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 34, 'VariantID' => 1, 'Stock' => 45, 'Price' => 23000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 35, 'VariantID' => 1, 'Stock' => 188, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 36, 'VariantID' => 11, 'Stock' => 39, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 37, 'VariantID' => 10, 'Stock' => 25, 'Price' => 76000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 38, 'VariantID' => 8, 'Stock' => 56, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 39, 'VariantID' => 1, 'Stock' => 200, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 40, 'VariantID' => 1, 'Stock' => 78, 'Price' => 9000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 41, 'VariantID' => 8, 'Stock' => 100, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 41, 'VariantID' => 10, 'Stock' => 90, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 41, 'VariantID' => 9, 'Stock' => 57, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 41, 'VariantID' => 11, 'Stock' => 85, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 42, 'VariantID' => 10, 'Stock' => 34, 'Price' => 33000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 43, 'VariantID' => 8, 'Stock' => 72, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 43, 'VariantID' => 15, 'Stock' => 22, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 44, 'VariantID' => 15, 'Stock' => 10, 'Price' => 52000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 45, 'VariantID' => 1, 'Stock' => 30, 'Price' => 74000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 46, 'VariantID' => 14, 'Stock' => 25, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 47, 'VariantID' => 11, 'Stock' => 20, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 47, 'VariantID' => 16, 'Stock' => 25, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 47, 'VariantID' => 9, 'Stock' => 12, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 48, 'VariantID' => 1, 'Stock' => 75, 'Price' => 28000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 49, 'VariantID' => 8, 'Stock' => 90, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 49, 'VariantID' => 15, 'Stock' => 45, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 50, 'VariantID' => 14, 'Stock' => 99, 'Price' => 21000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 51, 'VariantID' => 1, 'Stock' => 15, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()]







        ]);
    }
}
