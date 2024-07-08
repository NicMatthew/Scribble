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
            //61
            ['VariantName' => '50 lembar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //62
            ['VariantName' => '100 lembar', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //63
            ['VariantName' => 'A5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //64
            ['VariantName' => 'B5', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //65
            ['VariantName' => 'Brown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //66
            ['VariantName' => 'Small', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //67
            ['VariantName' => 'Large', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //68
            ['VariantName' => 'Plain', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //69
            ['VariantName' => 'Grid', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //70
            ['VariantName' => 'Dotted', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //71
            ['VariantName' => 'Ruled', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //72
            ['VariantName' => 'Brown', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //73
            ['VariantName' => 'Grey', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //74
            ['VariantName' => 'Blue-Orange', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //75
            ['VariantName' => 'Pink-Green', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //76
            ['VariantName' => 'Blue-Yellow', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //77
            ['VariantName' => 'Hare', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //78
            ['VariantName' => 'Snow', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //79
            ['VariantName' => 'Jilid Atas', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //80
            ['VariantName' => 'Jilid Samping', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //81
            ['VariantName' => 'Sage Green', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //82
            ['VariantName' => 'Light Pink', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //83
            ['VariantName' => '8g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //84
            ['VariantName' => '15g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //85
            ['VariantName' => '25g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //86
            ['VariantName' => '8.2g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //87
            ['VariantName' => '21g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //88
            ['VariantName' => '40g', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //89
            ['VariantName' => '20ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //90
            ['VariantName' => '35ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //91
            ['VariantName' => '125ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //92
            ['VariantName' => '40ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //93
            ['VariantName' => '60ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //94
            ['VariantName' => '150ml', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //95
            ['VariantName' => '24mm x 15yard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //96
            ['VariantName' => '12mm x 15 yard', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            //97
            ['VariantName' => 'Navy Blue', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],


                    

        ]);
    }
}
