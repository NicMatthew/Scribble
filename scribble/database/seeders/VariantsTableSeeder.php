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
            //23
            ['VariantName' => 'HB', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //24
            ['VariantName' => 'B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //25
            ['VariantName' => '2B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //26
            ['VariantName' => '3B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //27
            ['VariantName' => '4B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //28
            ['VariantName' => '5B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //29
            ['VariantName' => '6B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //30
            ['VariantName' => '7B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //31
            ['VariantName' => '8B', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //32
            ['VariantName' => 'Purple', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //33
            ['VariantName' => 'Kuromi', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //34
            ['VariantName' => 'CinamonRoll', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //35
            ['VariantName' => 'My Melody', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //36
            ['VariantName' => 'Pochacco', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //37
            ['VariantName' => 'Sanrio', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //38
            ['VariantName' => 'Super Soft', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //39
            ['VariantName' => 'Soft', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //40
            ['VariantName' => 'Neutral', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //41
            ['VariantName' => 'Medium', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //42
            ['VariantName' => 'Hard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //43
            ['VariantName' => 'A4', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //44
            ['VariantName' => 'A3', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //45
            ['VariantName' => 'Dark Brown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //46
            ['VariantName' => 'Plaid Biru', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //47
            ['VariantName' => 'Kuning Pastel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //48
            ['VariantName' => 'Plaid Pink', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //49
            ['VariantName' => 'Biru Pastel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //50
            ['VariantName' => 'Peach', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //51
            ['VariantName' => 'Purin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //52
            ['VariantName' => 'Copper', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //53
            ['VariantName' => 'Gold', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //54
            ['VariantName' => 'Silver', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //55
            ['VariantName' => 'Yellow', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //56
            ['VariantName' => 'Random', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //57
            ['VariantName' => 'Light Blue', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //58
            ['VariantName' => 'Blue Silver', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //59
            ['VariantName' => 'Wood', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //60
            ['VariantName' => 'Blue & White', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            
                        

        ]);
    }
}
