<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            //--ballpoints--
            //ballpoint 1
            ['VariantID' => 2, 'ProductID' => 1, 'Image' => '/assets/ballpoints_pens/ballpoint1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 3, 'ProductID' => 1, 'Image' => '/assets/ballpoints_pens/ballpoint1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 4, 'ProductID' => 1, 'Image' => '/assets/ballpoints_pens/ballpoint1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 5, 'ProductID' => 1, 'Image' => '/assets/ballpoints_pens/ballpoint1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            //ballpoint 2
            ['VariantID' => 1, 'ProductID' => 2, 'Image' => '/assets/ballpoints_pens/ballpoint2_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 3, 'Image' => '/assets/ballpoints_pens/ballpoint3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 3, 'Image' => '/assets/ballpoints_pens/ballpoint3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 3, 'Image' => '/assets/ballpoints_pens/ballpoint3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 3, 'Image' => '/assets/ballpoints_pens/ballpoint3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            //ballpoint 4
            ['VariantID' => 1, 'ProductID' => 4, 'Image' => '/assets/ballpoints_pens/ballpoint4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            //ballpoint 5
            ['VariantID' => 1, 'ProductID' => 5, 'Image' => '/assets/ballpoints_pens/ballpoint5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
            //--fountain--
            //fountain 1
            ['VariantID' => 6, 'ProductID' => 6, 'Image' => '/assets/fountain_pens/fountain1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 7, 'ProductID' => 6, 'Image' => '/assets/fountain_pens/fountain1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            //fountain 2
            ['VariantID' => 1, 'ProductID' => 7, 'Image' => '/assets/fountain_pens/fountain2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            //fountain 3
            ['VariantID' => 1, 'ProductID' => 8, 'Image' => '/assets/fountain_pens/fountain3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 8, 'Image' => '/assets/fountain_pens/fountain3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 8, 'Image' => '/assets/fountain_pens/fountain3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            //fountain 4
            ['VariantID' => 8, 'ProductID' => 9, 'Image' => '/assets/fountain_pens/fountain4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 9, 'ProductID' => 9, 'Image' => '/assets/fountain_pens/fountain4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 9, 'Image' => '/assets/fountain_pens/fountain4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 9, 'Image' => '/assets/fountain_pens/fountain4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            //fountain 5
            ['VariantID' => 12, 'ProductID' => 10, 'Image' => '/assets/fountain_pens/fountain5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 12, 'ProductID' => 10, 'Image' => '/assets/fountain_pens/fountain5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 13, 'ProductID' => 10, 'Image' => '/assets/fountain_pens/fountain5_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            //--marker--
            //marker 1
            ['VariantID' => 9, 'ProductID' => 11, 'Image' => '/assets/marker_pens/marker1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 11, 'Image' => '/assets/marker_pens/marker1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 11, 'Image' => '/assets/marker_pens/marker1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            //marker 2
            ['VariantID' => 1, 'ProductID' => 12, 'Image' => '/assets/marker_pens/marker2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 12, 'Image' => '/assets/marker_pens/marker2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            //marker 3
            ['VariantID' => 10, 'ProductID' => 13, 'Image' => '/assets/marker_pens/marker3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 9, 'ProductID' => 13, 'Image' => '/assets/marker_pens/marker3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 13, 'Image' => '/assets/marker_pens/marker3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 13, 'Image' => '/assets/marker_pens/marker3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            //marker 4
            ['VariantID' => 11, 'ProductID' => 14, 'Image' => '/assets/marker_pens/marker4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 14, 'Image' => '/assets/marker_pens/marker4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 14, 'Image' => '/assets/marker_pens/marker4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 14, 'Image' => '/assets/marker_pens/marker4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 16, 'ProductID' => 14, 'Image' => '/assets/marker_pens/marker4_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            //marker 5
            ['VariantID' => 1, 'ProductID' => 15, 'Image' => '/assets/marker_pens/marker5_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            //--specialty--
            //specialty 1
            ['VariantID' => 10, 'ProductID' => 16, 'Image' => '/assets/specialty_pens/specialty1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 16, 'Image' => '/assets/specialty_pens/specialty1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 16, 'Image' => '/assets/specialty_pens/specialty1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            //specialty 2
            ['VariantID' => 1, 'ProductID' => 17, 'Image' => '/assets/specialty_pens/specialty2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 17, 'Image' => '/assets/specialty_pens/specialty2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 17, 'Image' => '/assets/specialty_pens/specialty2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            //specialty 3
            ['VariantID' => 1, 'ProductID' => 18, 'Image' => '/assets/specialty_pens/specialty3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            //specialty 4
            ['VariantID' => 1, 'ProductID' => 19, 'Image' => '/assets/specialty_pens/specialty4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 19, 'Image' => '/assets/specialty_pens/specialty4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 19, 'Image' => '/assets/specialty_pens/specialty4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            //specialty 5
            ['VariantID' => 10, 'ProductID' => 20, 'Image' => '/assets/specialty_pens/specialty5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 20, 'Image' => '/assets/specialty_pens/specialty5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 20, 'Image' => '/assets/specialty_pens/specialty5_image3.svg', 'created_at' => now(), 'updated_at' => now()],



            //cutting tools
            //scissors
            ['VariantID' => 1, 'ProductID' => 21, 'Image' => '/assets/cutting_tools/scissors/scissors1_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 22, 'Image' => '/assets/cutting_tools/scissors/scissors2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 22, 'Image' => '/assets/cutting_tools/scissors/scissors2_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 22, 'Image' => '/assets/cutting_tools/scissors/scissors2_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 17, 'ProductID' => 23, 'Image' => '/assets/cutting_tools/scissors/scissors3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 17, 'ProductID' => 23, 'Image' => '/assets/cutting_tools/scissors/scissors3_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 23, 'Image' => '/assets/cutting_tools/scissors/scissors3_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 17, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 18, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 17, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 11, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image5.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 20, 'ProductID' => 26, 'Image' => '/assets/cutting_tools/scissors/scissors6_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 20, 'ProductID' => 26, 'Image' => '/assets/cutting_tools/scissors/scissors6_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 21, 'ProductID' => 26, 'Image' => '/assets/cutting_tools/scissors/scissors6_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 22, 'ProductID' => 26, 'Image' => '/assets/cutting_tools/scissors/scissors6_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 20, 'ProductID' => 26, 'Image' => '/assets/cutting_tools/scissors/scissors6_image5.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 27, 'Image' => '/assets/cutting_tools/scissors/scissors7_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 28, 'Image' => '/assets/cutting_tools/scissors/scissors8_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 28, 'Image' => '/assets/cutting_tools/scissors/scissors8_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 29, 'Image' => '/assets/cutting_tools/scissors/scissors9_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 29, 'Image' => '/assets/cutting_tools/scissors/scissors9_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 29, 'Image' => '/assets/cutting_tools/scissors/scissors9_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 29, 'Image' => '/assets/cutting_tools/scissors/scissors9_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 29, 'Image' => '/assets/cutting_tools/scissors/scissors9_image5.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 30, 'Image' => '/assets/cutting_tools/scissors/scissors10_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 30, 'Image' => '/assets/cutting_tools/scissors/scissors10_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 30, 'Image' => '/assets/cutting_tools/scissors/scissors10_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 31, 'Image' => '/assets/cutting_tools/scissors/scissors11_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 32, 'Image' => '/assets/cutting_tools/scissors/scissors12_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 32, 'Image' => '/assets/cutting_tools/scissors/scissors12_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 33, 'Image' => '/assets/cutting_tools/scissors/scissors13_image1.png', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 34, 'Image' => '/assets/cutting_tools/scissors/scissors14_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 34, 'Image' => '/assets/cutting_tools/scissors/scissors14_image2.png', 'created_at' => now(), 'updated_at' => now()],

            //cutters
            ['VariantID' => 1, 'ProductID' => 35, 'Image' => '/assets/cutting_tools/cutters/cutter1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 35, 'Image' => '/assets/cutting_tools/cutters/cutter1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 35, 'Image' => '/assets/cutting_tools/cutters/cutter1_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 35, 'Image' => '/assets/cutting_tools/cutters/cutter1_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 11, 'ProductID' => 36, 'Image' => '/assets/cutting_tools/cutters/cutter2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 36, 'Image' => '/assets/cutting_tools/cutters/cutter2_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 36, 'Image' => '/assets/cutting_tools/cutters/cutter2_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 37, 'Image' => '/assets/cutting_tools/cutters/cutter3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 37, 'Image' => '/assets/cutting_tools/cutters/cutter3_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 37, 'Image' => '/assets/cutting_tools/cutters/cutter3_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 38, 'Image' => '/assets/cutting_tools/cutters/cutter4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 38, 'Image' => '/assets/cutting_tools/cutters/cutter4_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 39, 'Image' => '/assets/cutting_tools/cutters/cutter5_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 40, 'Image' => '/assets/cutting_tools/cutters/cutter6_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 9, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image5.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image6.png', 'created_at' => now(), 'updated_at' => now()],

            //sharpeners
            ['VariantID' => 10, 'ProductID' => 42, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 42, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 42, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners1_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 42, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners1_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 43, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 43, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners2_image2.png', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 15, 'ProductID' => 44, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 44, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners3_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 44, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners3_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 45, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 45, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners4_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 14, 'ProductID' => 46, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 46, 'Image' => '/assets/cutting_tools/sharpeners/sharpeners5_image2.png', 'created_at' => now(), 'updated_at' => now()],

            //punch hole
            ['VariantID' => 11, 'ProductID' => 47, 'Image' => '/assets/cutting_tools/punch_hole/punchhole1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 16, 'ProductID' => 47, 'Image' => '/assets/cutting_tools/punch_hole/punchhole1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 9, 'ProductID' => 47, 'Image' => '/assets/cutting_tools/punch_hole/punchhole1_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 16, 'ProductID' => 47, 'Image' => '/assets/cutting_tools/punch_hole/punchhole1_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 48, 'Image' => '/assets/cutting_tools/punch_hole/punchhole2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 48, 'Image' => '/assets/cutting_tools/punch_hole/punchhole2_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 49, 'Image' => '/assets/cutting_tools/punch_hole/punchhole3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 49, 'Image' => '/assets/cutting_tools/punch_hole/punchhole3_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 14, 'ProductID' => 50, 'Image' => '/assets/cutting_tools/punch_hole/punchhole4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 50, 'Image' => '/assets/cutting_tools/punch_hole/punchhole4_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 11, 'ProductID' => 51, 'Image' => '/assets/cutting_tools/punch_hole/punchhole5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 51, 'Image' => '/assets/cutting_tools/punch_hole/punchhole5_image2.png', 'created_at' => now(), 'updated_at' => now()],



            //pencils
            //woodcase
            ['VariantID' => 23, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 23, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 23, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 24, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 25, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 26, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image6.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 27, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image7.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 28, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image8.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 29, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image9.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 30, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image10.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 31, 'ProductID' => 52, 'Image' => '/assets/pencils/woodcase/woodcase1_image11.svg', 'created_at' => now(), 'updated_at' => now()],
           
            ['VariantID' => 1, 'ProductID' => 53, 'Image' => '/assets/pencils/woodcase/woodcase2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 53, 'Image' => '/assets/pencils/woodcase/woodcase2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 53, 'Image' => '/assets/pencils/woodcase/woodcase2_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 23, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 23, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 24, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 25, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 26, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 27, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image6.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 28, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image7.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 29, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image8.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 30, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image9.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 31, 'ProductID' => 54, 'Image' => '/assets/pencils/woodcase/woodcase3_image10.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 23, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 23, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 23, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 24, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 25, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 26, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image6.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 27, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image7.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 28, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image8.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 29, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image9.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 30, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image10.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 31, 'ProductID' => 55, 'Image' => '/assets/pencils/woodcase/woodcase4_image11.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 56, 'Image' => '/assets/pencils/woodcase/woodcase5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 56, 'Image' => '/assets/pencils/woodcase/woodcase5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
           
            ['VariantID' => 1, 'ProductID' => 57, 'Image' => '/assets/pencils/woodcase/woodcase6_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            //mechanical pencils
            ['VariantID' => 8, 'ProductID' => 58, 'Image' => '/assets/pencils/mechanical/mechanical1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 58, 'Image' => '/assets/pencils/mechanical/mechanical1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 58, 'Image' => '/assets/pencils/mechanical/mechanical1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 58, 'Image' => '/assets/pencils/mechanical/mechanical1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 18, 'ProductID' => 58, 'Image' => '/assets/pencils/mechanical/mechanical1_image5.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 59, 'Image' => '/assets/pencils/mechanical/mechanical2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 59, 'Image' => '/assets/pencils/mechanical/mechanical2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 59, 'Image' => '/assets/pencils/mechanical/mechanical2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 59, 'Image' => '/assets/pencils/mechanical/mechanical2_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 10, 'ProductID' => 60, 'Image' => '/assets/pencils/mechanical/mechanical3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 60, 'Image' => '/assets/pencils/mechanical/mechanical3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 60, 'Image' => '/assets/pencils/mechanical/mechanical3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 60, 'Image' => '/assets/pencils/mechanical/mechanical3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 32, 'ProductID' => 60, 'Image' => '/assets/pencils/mechanical/mechanical3_image5.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 61, 'Image' => '/assets/pencils/mechanical/mechanical4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 61, 'Image' => '/assets/pencils/mechanical/mechanical4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 61, 'Image' => '/assets/pencils/mechanical/mechanical4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 61, 'Image' => '/assets/pencils/mechanical/mechanical4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 32, 'ProductID' => 61, 'Image' => '/assets/pencils/mechanical/mechanical4_image5.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 62, 'Image' => '/assets/pencils/mechanical/mechanical5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 62, 'Image' => '/assets/pencils/mechanical/mechanical5_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 63, 'Image' => '/assets/pencils/mechanical/mechanical6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 63, 'Image' => '/assets/pencils/mechanical/mechanical6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 63, 'Image' => '/assets/pencils/mechanical/mechanical6_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 35, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 35, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 36, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 37, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 34, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 33, 'ProductID' => 64, 'Image' => '/assets/pencils/mechanical/mechanical7_image6.svg', 'created_at' => now(), 'updated_at' => now()],

            //colored pencils
            ['VariantID' => 1, 'ProductID' => 65, 'Image' => '/assets/pencils/coloured/coloured1_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 66, 'Image' => '/assets/pencils/coloured/coloured2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 66, 'Image' => '/assets/pencils/coloured/coloured2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 67, 'Image' => '/assets/pencils/coloured/coloured3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 67, 'Image' => '/assets/pencils/coloured/coloured3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 68, 'Image' => '/assets/pencils/coloured/coloured4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 68, 'Image' => '/assets/pencils/coloured/coloured4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 69, 'Image' => '/assets/pencils/coloured/coloured5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 70, 'Image' => '/assets/pencils/coloured/coloured6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 71, 'Image' => '/assets/pencils/coloured/coloured7_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 72, 'Image' => '/assets/pencils/coloured/coloured8_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 72, 'Image' => '/assets/pencils/coloured/coloured8_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 72, 'Image' => '/assets/pencils/coloured/coloured8_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 72, 'Image' => '/assets/pencils/coloured/coloured8_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 73, 'Image' => '/assets/pencils/coloured/coloured9_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 73, 'Image' => '/assets/pencils/coloured/coloured9_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 73, 'Image' => '/assets/pencils/coloured/coloured9_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            //charcoal pencils
            ['VariantID' => 39, 'ProductID' => 74, 'Image' => '/assets/pencils/charcoal/charcoal1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 74, 'Image' => '/assets/pencils/charcoal/charcoal1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 74, 'Image' => '/assets/pencils/charcoal/charcoal1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 38, 'ProductID' => 74, 'Image' => '/assets/pencils/charcoal/charcoal1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 40, 'ProductID' => 74, 'Image' => '/assets/pencils/charcoal/charcoal1_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 75, 'Image' => '/assets/pencils/charcoal/charcoal2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 75, 'Image' => '/assets/pencils/charcoal/charcoal2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 75, 'Image' => '/assets/pencils/charcoal/charcoal2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
           
            ['VariantID' => 39, 'ProductID' => 76, 'Image' => '/assets/pencils/charcoal/charcoal3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 76, 'Image' => '/assets/pencils/charcoal/charcoal3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 76, 'Image' => '/assets/pencils/charcoal/charcoal3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 41, 'ProductID' => 76, 'Image' => '/assets/pencils/charcoal/charcoal3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 42, 'ProductID' => 76, 'Image' => '/assets/pencils/charcoal/charcoal3_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 39, 'ProductID' => 77, 'Image' => '/assets/pencils/charcoal/charcoal4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 77, 'Image' => '/assets/pencils/charcoal/charcoal4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 41, 'ProductID' => 77, 'Image' => '/assets/pencils/charcoal/charcoal4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 42, 'ProductID' => 77, 'Image' => '/assets/pencils/charcoal/charcoal4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 39, 'ProductID' => 78, 'Image' => '/assets/pencils/charcoal/charcoal5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 39, 'ProductID' => 78, 'Image' => '/assets/pencils/charcoal/charcoal5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 41, 'ProductID' => 78, 'Image' => '/assets/pencils/charcoal/charcoal5_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 42, 'ProductID' => 78, 'Image' => '/assets/pencils/charcoal/charcoal5_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 79, 'Image' => '/assets/pencils/charcoal/charcoal6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 79, 'Image' => '/assets/pencils/charcoal/charcoal6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 79, 'Image' => '/assets/pencils/charcoal/charcoal6_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 79, 'Image' => '/assets/pencils/charcoal/charcoal6_image4.svg', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
