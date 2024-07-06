<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //variants
        DB::table('variants')->insert([
            //1
            ['VariantName' => 'None', 'created_at' => now(), 'updated_at' => now()],
            //2
            ['VariantName' => 'Papaya', 'created_at' => now(), 'updated_at' => now()],
            //3
            ['VariantName' => 'Cherry', 'created_at' => now(), 'updated_at' => now()],
            //4
            ['VariantName' => 'Rose Gold Yogurt', 'created_at' => now(), 'updated_at' => now()],
            //5
            ['VariantName' => 'Rose Gold La France', 'created_at' => now(), 'updated_at' => now()],
            //6
            ['VariantName' => 'Turqoise', 'created_at' => now(), 'updated_at' => now()],
            //7
            ['VariantName' => 'LE espresso', 'created_at' => now(), 'updated_at' => now()],
            //8
            ['VariantName' => 'Blue', 'created_at' => now(), 'updated_at' => now()],
            //9
            ['VariantName' => 'Red', 'created_at' => now(), 'updated_at' => now()],
            //10
            ['VariantName' => 'Black', 'created_at' => now(), 'updated_at' => now()],
            //11
            ['VariantName' => 'White', 'created_at' => now(), 'updated_at' => now()],
            //12
            ['VariantName' => 'No Converter', 'created_at' => now(), 'updated_at' => now()],
            //13
            ['VariantName' => 'With Converter', 'created_at' => now(), 'updated_at' => now()],
            //14
            ['VariantName' => 'Green', 'created_at' => now(), 'updated_at' => now()],
            //15
            ['VariantName' => 'Pink', 'created_at' => now(), 'updated_at' => now()],
            //16
            ['VariantName' => 'Dark Blue', 'created_at' => now(), 'updated_at' => now()],
            //17
            ['VariantName' => 'Khaki', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //18
            ['VariantName' => 'Orange', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //19
            ['VariantName' => 'Beige', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //20
            ['VariantName' => 'SC-828', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //21
            ['VariantName' => 'SC-838', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //22
            ['VariantName' => 'SC-848', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
