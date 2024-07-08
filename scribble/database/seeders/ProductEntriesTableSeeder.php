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
            //pen
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



            //cutting tools
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

            ['ProductID' => 51, 'VariantID' => 1, 'Stock' => 15, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()],



            //pencils
            //woodcase
            ['ProductID' => 52, 'VariantID' => 23, 'Stock' => 25, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 24, 'Stock' => 30, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 25, 'Stock' => 90, 'Price' => 6000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 26, 'Stock' => 40, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 27, 'Stock' => 45, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 28, 'Stock' => 23, 'Price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 29, 'Stock' => 20, 'Price' => 12000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 30, 'Stock' => 30, 'Price' => 14000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 52, 'VariantID' => 31, 'Stock' => 15, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 53, 'VariantID' => 1, 'Stock' => 40, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 54, 'VariantID' => 23, 'Stock' => 15, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 24, 'Stock' => 20, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 25, 'Stock' => 60, 'Price' => 6000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 26, 'Stock' => 10, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 27, 'Stock' => 27, 'Price' => 8000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 28, 'Stock' => 17, 'Price' => 9000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 29, 'Stock' => 28, 'Price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 30, 'Stock' => 30, 'Price' => 12000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 54, 'VariantID' => 31, 'Stock' => 6, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 55, 'VariantID' => 23, 'Stock' => 55, 'Price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 24, 'Stock' => 3, 'Price' => 5500, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 25, 'Stock' => 40, 'Price' => 6500, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 26, 'Stock' => 17, 'Price' => 7500, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 27, 'Stock' => 33, 'Price' => 8500, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 28, 'Stock' => 32, 'Price' => 9000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 29, 'Stock' => 6, 'Price' => 10000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 30, 'Stock' => 8, 'Price' => 12000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 55, 'VariantID' => 31, 'Stock' => 13, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 56, 'VariantID' => 1, 'Stock' => 70, 'Price' => 4000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 57, 'VariantID' => 1, 'Stock' => 42, 'Price' => 48000, 'created_at' => now(), 'updated_at' => now()],

            //mechanical
            ['ProductID' => 58, 'VariantID' => 8, 'Stock' => 28, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 58, 'VariantID' => 15, 'Stock' => 16, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 58, 'VariantID' => 18, 'Stock' => 32, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 59, 'VariantID' => 15, 'Stock' => 40, 'Price' => 13000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 59, 'VariantID' => 14, 'Stock' => 55, 'Price' => 13000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 59, 'VariantID' => 8, 'Stock' => 14, 'Price' => 13000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 60, 'VariantID' => 10, 'Stock' => 26, 'Price' => 22000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 60, 'VariantID' => 8, 'Stock' => 24, 'Price' => 22000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 60, 'VariantID' => 15, 'Stock' => 29, 'Price' => 22000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 60, 'VariantID' => 32, 'Stock' => 18, 'Price' => 22000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 61, 'VariantID' => 15, 'Stock' => 16, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 61, 'VariantID' => 14, 'Stock' => 24, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 61, 'VariantID' => 8, 'Stock' => 19, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 61, 'VariantID' => 32, 'Stock' => 18, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 62, 'VariantID' => 1, 'Stock' => 10, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 63, 'VariantID' => 1, 'Stock' => 5, 'Price' => 65000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 64, 'VariantID' => 35, 'Stock' => 8, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 64, 'VariantID' => 36, 'Stock' => 7, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 64, 'VariantID' => 37, 'Stock' => 10, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 64, 'VariantID' => 34, 'Stock' => 8, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 64, 'VariantID' => 33, 'Stock' => 9, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            
            //coloured
            ['ProductID' => 65, 'VariantID' => 1, 'Stock' => 25, 'Price' => 47000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 66, 'VariantID' => 1, 'Stock' => 60, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 67, 'VariantID' => 1, 'Stock' => 54, 'Price' => 75000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 68, 'VariantID' => 1, 'Stock' => 37, 'Price' => 96000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 69, 'VariantID' => 1, 'Stock' => 27, 'Price' => 42000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 70, 'VariantID' => 1, 'Stock' => 20, 'Price' => 68000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 71, 'VariantID' => 1, 'Stock' => 18, 'Price' => 80000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 72, 'VariantID' => 1, 'Stock' => 25, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 73, 'VariantID' => 1, 'Stock' => 22, 'Price' => 88000, 'created_at' => now(), 'updated_at' => now()],
            
            //Charcoal
            ['ProductID' => 74, 'VariantID' => 39, 'Stock' => 18, 'Price' => 14000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 74, 'VariantID' => 38, 'Stock' => 12, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 74, 'VariantID' => 40, 'Stock' => 20, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 75, 'VariantID' => 1, 'Stock' => 34, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 76, 'VariantID' => 39, 'Stock' => 30, 'Price' => 13000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 76, 'VariantID' => 41, 'Stock' => 45, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 76, 'VariantID' => 42, 'Stock' => 21, 'Price' => 19000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 77, 'VariantID' => 39, 'Stock' => 60, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 77, 'VariantID' => 41, 'Stock' => 65, 'Price' => 20000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 77, 'VariantID' => 42, 'Stock' => 41, 'Price' => 21000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 78, 'VariantID' => 39, 'Stock' => 40, 'Price' => 20000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 78, 'VariantID' => 41, 'Stock' => 39, 'Price' => 21000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 78, 'VariantID' => 42, 'Stock' => 30, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 79, 'VariantID' => 1, 'Stock' => 8, 'Price' => 150000, 'created_at' => now(), 'updated_at' => now()],

            //markers
            ['ProductID' => 80, 'VariantID' => 10, 'Stock' => 102, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 81, 'VariantID' => 10, 'Stock' => 34, 'Price' => 20000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 82, 'VariantID' => 8, 'Stock' => 18, 'Price' => 11000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 83, 'VariantID' => 54, 'Stock' => 28, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 83, 'VariantID' => 53, 'Stock' => 88, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 83, 'VariantID' => 11, 'Stock' => 90, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 83, 'VariantID' => 52, 'Stock' => 2, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 84, 'VariantID' => 1, 'Stock' => 10, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 85, 'VariantID' => 1, 'Stock' => 45, 'Price' => 90000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 86, 'VariantID' => 1, 'Stock' => 98, 'Price' => 36500, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 87, 'VariantID' => 10, 'Stock' => 105, 'Price' => 19000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 88, 'VariantID' => 18, 'Stock' => 45, 'Price' => 16000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 88, 'VariantID' => 8, 'Stock' => 25, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 88, 'VariantID' => 10, 'Stock' => 35, 'Price' => 17000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 89, 'VariantID' => 56, 'Stock' => 99, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 89, 'VariantID' => 55, 'Stock' => 155, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 89, 'VariantID' => 14, 'Stock' => 123, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 89, 'VariantID' => 8, 'Stock' => 125, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 89, 'VariantID' => 15, 'Stock' => 99, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 89, 'VariantID' => 18, 'Stock' => 57, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 90, 'VariantID' => 1, 'Stock' => 17, 'Price' => 20000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 91, 'VariantID' => 1, 'Stock' => 5, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 92, 'VariantID' => 15, 'Stock' => 5, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 92, 'VariantID' => 32, 'Stock' => 2, 'Price' => 53000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 92, 'VariantID' => 8, 'Stock' => 1, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 92, 'VariantID' => 14, 'Stock' => 9, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 92, 'VariantID' => 55, 'Stock' => 10, 'Price' => 54000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 93, 'VariantID' => 1, 'Stock' => 4, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 94, 'VariantID' => 1, 'Stock' => 9, 'Price' => 43000, 'created_at' => now(), 'updated_at' => now()],


            //others
            ['ProductID' => 95, 'VariantID' => 10, 'Stock' => 10, 'Price' => 24000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 95, 'VariantID' => 50, 'Stock' => 1, 'Price' => 34000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 96, 'VariantID' => 1, 'Stock' => 24, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 97, 'VariantID' => 1, 'Stock' => 75, 'Price' => 19000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 98, 'VariantID' => 57, 'Stock' => 86, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 98, 'VariantID' => 15, 'Stock' => 6, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 98, 'VariantID' => 19, 'Stock' => 34, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 99, 'VariantID' => 33, 'Stock' => 122, 'Price' => 44000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 99, 'VariantID' => 34, 'Stock' => 176, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 99, 'VariantID' => 35, 'Stock' => 99, 'Price' => 44000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 100, 'VariantID' => 46, 'Stock' => 29, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 100, 'VariantID' => 47, 'Stock' => 39, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 100, 'VariantID' => 48, 'Stock' => 27, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 100, 'VariantID' => 49, 'Stock' => 45, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 101, 'VariantID' => 15, 'Stock' => 68, 'Price' => 67000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 102, 'VariantID' => 15, 'Stock' => 102, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 103, 'VariantID' => 51, 'Stock' => 99, 'Price' => 37000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 103, 'VariantID' => 34, 'Stock' => 90, 'Price' => 37000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 103, 'VariantID' => 35, 'Stock' => 34, 'Price' => 37000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 103, 'VariantID' => 33, 'Stock' => 26, 'Price' => 47000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 104, 'VariantID' => 1, 'Stock' => 5, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 105, 'VariantID' => 1, 'Stock' => 8, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 106, 'VariantID' => 10, 'Stock' => 18, 'Price' => 7000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 107, 'VariantID' => 1, 'Stock' => 67, 'Price' => 10000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 108, 'VariantID' => 10, 'Stock' => 99, 'Price' => 25000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 109, 'VariantID' => 1, 'Stock' => 75, 'Price' => 18000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 110, 'VariantID' => 15, 'Stock' => 100, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 110, 'VariantID' => 8, 'Stock' => 24, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 110, 'VariantID' => 14, 'Stock' => 293, 'Price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            
            ['ProductID' => 111, 'VariantID' => 54, 'Stock' => 188, 'Price' => 29000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 111, 'VariantID' => 58, 'Stock' => 89, 'Price' => 29000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 111, 'VariantID' => 59, 'Stock' => 70, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 112, 'VariantID' => 8, 'Stock' => 757, 'Price' => 13000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 113, 'VariantID' => 1, 'Stock' => 43, 'Price' => 17800, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 114, 'VariantID' => 1, 'Stock' => 986, 'Price' => 19300, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 115, 'VariantID' => 15, 'Stock' => 10, 'Price' => 27000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 116, 'VariantID' => 15, 'Stock' => 300, 'Price' => 14000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 117, 'VariantID' => 60, 'Stock' => 15, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 118, 'VariantID' => 11, 'Stock' => 177, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 119, 'VariantID' => 10, 'Stock' => 266, 'Price' => 29000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 120, 'VariantID' => 19, 'Stock' => 8, 'Price' => 67000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 120, 'VariantID' => 14, 'Stock' => 16, 'Price' => 67000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 120, 'VariantID' => 45, 'Stock' => 35, 'Price' => 67000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 121, 'VariantID' => 8, 'Stock' => 15, 'Price' => 29000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 122, 'VariantID' => 43, 'Stock' => 45, 'Price' => 36000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 122, 'VariantID' => 44, 'Stock' => 30, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],

            //Writing Paper
            ['ProductID' => 123, 'VariantID' => 1, 'Stock' => 150, 'Price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 124, 'VariantID' => 1, 'Stock' => 250, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 124, 'VariantID' => 61, 'Stock' => 120, 'Price' => 110000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 124, 'VariantID' => 62, 'Stock' => 90, 'Price' => 130000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 125, 'VariantID' => 63, 'Stock' => 200, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 125, 'VariantID' => 64, 'Stock' => 300, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 126, 'VariantID' => 1, 'Stock' => 110, 'Price' => 63000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 126, 'VariantID' => 8, 'Stock' => 210, 'Price' => 78000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 126, 'VariantID' => 14, 'Stock' => 150, 'Price' => 82000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 126, 'VariantID' => 15, 'Stock' => 130, 'Price' => 91000, 'created_at' => now(), 'updated_at' => now()],

            ['ProductID' => 127, 'VariantID' => 1, 'Stock' => 220, 'Price' => 105000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 32, 'Stock' => 50, 'Price' => 115000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 50, 'Stock' => 80, 'Price' => 98000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 14, 'Stock' => 90, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 57, 'Stock' => 70, 'Price' => 112000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 15, 'Stock' => 40, 'Price' => 137000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 127, 'VariantID' => 55, 'Stock' => 60, 'Price' => 145000, 'created_at' => now(), 'updated_at' => now()],

            //Printing Paper
            ['ProductID' => 128, 'VariantID' => 1, 'Stock' => 220, 'Price' => 85000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 129, 'VariantID' => 1, 'Stock' => 190, 'Price' => 91000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 130, 'VariantID' => 1, 'Stock' => 175, 'Price' => 89000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 131, 'VariantID' => 1, 'Stock' => 240, 'Price' => 93000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 132, 'VariantID' => 1, 'Stock' => 260, 'Price' => 102000, 'created_at' => now(), 'updated_at' => now()],

            //Specialty Paper
            ['ProductID' => 133, 'VariantID' => 1, 'Stock' => 200, 'Price' => 77000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 134, 'VariantID' => 1, 'Stock' => 180, 'Price' => 98000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 135, 'VariantID' => 1, 'Stock' => 210, 'Price' => 89000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 136, 'VariantID' => 1, 'Stock' => 220, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 137, 'VariantID' => 1, 'Stock' => 195, 'Price' => 94000, 'created_at' => now(), 'updated_at' => now()],

            //Sticky Notes
            ['ProductID' => 138, 'VariantID' => 65, 'Stock' => 150, 'Price' => 53000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 138, 'VariantID' => 32, 'Stock' => 200, 'Price' => 49000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 138, 'VariantID' => 8, 'Stock' => 70, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 139, 'VariantID' => 1, 'Stock' => 60, 'Price' => 47000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 140, 'VariantID' => 1, 'Stock' => 90, 'Price' => 44000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 141, 'VariantID' => 1, 'Stock' => 120, 'Price' => 46000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 142, 'VariantID' => 65, 'Stock' => 140, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 142, 'VariantID' => 41, 'Stock' => 130, 'Price' => 51000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 142, 'VariantID' => 67, 'Stock' => 110, 'Price' => 48000, 'created_at' => now(), 'updated_at' => now()],


           //Notebooks
            ['ProductID' => 143, 'VariantID' => 1, 'Stock' => 120, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 143, 'VariantID' => 68, 'Stock' => 95, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 143, 'VariantID' => 69, 'Stock' => 110, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 143, 'VariantID' => 70, 'Stock' => 150, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 143, 'VariantID' => 71, 'Stock' => 80, 'Price' => 125000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 144, 'VariantID' => 1, 'Stock' => 75, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 144, 'VariantID' => 71, 'Stock' => 50, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 144, 'VariantID' => 69, 'Stock' => 100, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 145, 'VariantID' => 1, 'Stock' => 30, 'Price' => 220000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 146, 'VariantID' => 1, 'Stock' => 200, 'Price' => 135000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 146, 'VariantID' => 10, 'Stock' => 150, 'Price' => 135000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 146, 'VariantID' => 72, 'Stock' => 180, 'Price' => 135000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 146, 'VariantID' => 16, 'Stock' => 200, 'Price' => 135000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 146, 'VariantID' => 73, 'Stock' => 200, 'Price' => 135000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 147, 'VariantID' => 1, 'Stock' => 40, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 1, 'Stock' => 50, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 73, 'Stock' => 60, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 55, 'Stock' => 45, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 15, 'Stock' => 80, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 16, 'Stock' => 90, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 148, 'VariantID' => 57, 'Stock' => 65, 'Price' => 87000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 149, 'VariantID' => 1, 'Stock' => 55, 'Price' => 190000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 149, 'VariantID' => 8, 'Stock' => 70, 'Price' => 190000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 149, 'VariantID' => 11, 'Stock' => 80, 'Price' => 190000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 150, 'VariantID' => 1, 'Stock' => 90, 'Price' => 240000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 150, 'VariantID' => 74, 'Stock' => 120, 'Price' => 240000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 150, 'VariantID' => 75, 'Stock' => 150, 'Price' => 240000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 150, 'VariantID' => 76, 'Stock' => 100, 'Price' => 240000, 'created_at' => now(), 'updated_at' => now()],

            //Planner
            ['ProductID' => 151, 'VariantID' => 1, 'Stock' => 200, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 152, 'VariantID' => 1, 'Stock' => 250, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 153, 'VariantID' => 1, 'Stock' => 300, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 154, 'VariantID' => 1, 'Stock' => 220, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 154, 'VariantID' => 77, 'Stock' => 270, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 154, 'VariantID' => 78, 'Stock' => 290, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 155, 'VariantID' => 1, 'Stock' => 240, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 156, 'VariantID' => 1, 'Stock' => 260, 'Price' => 32500, 'created_at' => now(), 'updated_at' => now()],

            // Sketchbooks
            ['ProductID' => 157, 'VariantID' => 1, 'Stock' => 250, 'Price' => 280000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 158, 'VariantID' => 1, 'Stock' => 300, 'Price' => 210000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 159, 'VariantID' => 1, 'Stock' => 180, 'Price' => 250000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 159, 'VariantID' => 79, 'Stock' => 160, 'Price' => 250000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 159, 'VariantID' => 80, 'Stock' => 140, 'Price' => 250000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 160, 'VariantID' => 1, 'Stock' => 220, 'Price' => 240000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 161, 'VariantID' => 1, 'Stock' => 190, 'Price' => 270000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 162, 'VariantID' => 1, 'Stock' => 170, 'Price' => 230000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 163, 'VariantID' => 1, 'Stock' => 160, 'Price' => 220000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 164, 'VariantID' => 1, 'Stock' => 150, 'Price' => 210000, 'created_at' => now(), 'updated_at' => now()],

            // Guestbooks
            ['ProductID' => 165, 'VariantID' => 1, 'Stock' => 150, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 166, 'VariantID' => 1, 'Stock' => 180, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 166, 'VariantID' => 14, 'Stock' => 200, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 166, 'VariantID' => 15, 'Stock' => 210, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 166, 'VariantID' => 19, 'Stock' => 170, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 167, 'VariantID' => 1, 'Stock' => 140, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 168, 'VariantID' => 1, 'Stock' => 160, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 168, 'VariantID' => 19, 'Stock' => 130, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 168, 'VariantID' => 81, 'Stock' => 120, 'Price' => 60000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 169, 'VariantID' => 1, 'Stock' => 110, 'Price' => 55000, 'created_at' => now(), 'updated_at' => now()],
            

            
            // Correction Tools
            // Tape
            ['ProductID' => 170, 'VariantID' => 1, 'Stock' => 220, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 170, 'VariantID' => 55, 'Stock' => 180, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 170, 'VariantID' => 8, 'Stock' => 200, 'Price' => 45000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 171, 'VariantID' => 9, 'Stock' => 160, 'Price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 171, 'VariantID' => 14, 'Stock' => 140, 'Price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 171, 'VariantID' => 8, 'Stock' => 120, 'Price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 172, 'VariantID' => 8, 'Stock' => 180, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 172, 'VariantID' => 15, 'Stock' => 170, 'Price' => 56000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 173, 'VariantID' => 8, 'Stock' => 160, 'Price' => 82000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 173, 'VariantID' => 15, 'Stock' => 150, 'Price' => 82000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 174, 'VariantID' => 82, 'Stock' => 200, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 174, 'VariantID' => 8, 'Stock' => 190, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 174, 'VariantID' => 73, 'Stock' => 180, 'Price' => 95000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 175, 'VariantID' => 1, 'Stock' => 170, 'Price' => 76000, 'created_at' => now(), 'updated_at' => now()],

            // Liquid
            ['ProductID' => 176, 'VariantID' => 1, 'Stock' => 220, 'Price' => 46000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 177, 'VariantID' => 1, 'Stock' => 210, 'Price' => 43000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 178, 'VariantID' => 1, 'Stock' => 190, 'Price' => 42000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 179, 'VariantID' => 1, 'Stock' => 180, 'Price' => 41000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 180, 'VariantID' => 1, 'Stock' => 200, 'Price' => 50000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 181, 'VariantID' => 1, 'Stock' => 170, 'Price' => 53000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 182, 'VariantID' => 1, 'Stock' => 160, 'Price' => 48000, 'created_at' => now(), 'updated_at' => now()],

            // Eraser
            ['ProductID' => 183, 'VariantID' => 1, 'Stock' => 300, 'Price' => 30000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 184, 'VariantID' => 1, 'Stock' => 290, 'Price' => 32000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 185, 'VariantID' => 1, 'Stock' => 280, 'Price' => 31000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 186, 'VariantID' => 1, 'Stock' => 270, 'Price' => 33000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 187, 'VariantID' => 1, 'Stock' => 260, 'Price' => 34000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 188, 'VariantID' => 1, 'Stock' => 250, 'Price' => 35000, 'created_at' => now(), 'updated_at' => now()],
            ['ProductID' => 189, 'VariantID' => 1, 'Stock' => 240, 'Price' => 36000, 'created_at' => now(), 'updated_at' => now()],
        


        ]);
    }
}
