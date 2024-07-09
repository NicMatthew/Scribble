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
            ['VariantID' => 17, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 18, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 24, 'Image' => '/assets/cutting_tools/scissors/scissors4_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 25, 'Image' => '/assets/cutting_tools/scissors/scissors5_image1.png', 'created_at' => now(), 'updated_at' => now()],
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

            ['VariantID' => 1, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 41, 'Image' => '/assets/cutting_tools/cutters/cutter7_image1.png', 'created_at' => now(), 'updated_at' => now()],
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
            
            ['VariantID' => 1, 'ProductID' => 70, 'Image' => '/assets/pencils/coloured/coloured6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
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


            //markers
            //permanent_markers
            ['VariantID' => 10, 'ProductID' => 80, 'Image' => '/assets/markers/permanent_markers/permanentmarkers1_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 81, 'Image' => '/assets/markers/permanent_markers/permanentmarkers2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 8, 'ProductID' => 82, 'Image' => '/assets/markers/permanent_markers/permanentmarkers3_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 54, 'ProductID' => 83, 'Image' => '/assets/markers/permanent_markers/permanentmarkers4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 53, 'ProductID' => 83, 'Image' => '/assets/markers/permanent_markers/permanentmarkers4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 83, 'Image' => '/assets/markers/permanent_markers/permanentmarkers4_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 52, 'ProductID' => 83, 'Image' => '/assets/markers/permanent_markers/permanentmarkers4_image4.png', 'created_at' => now(), 'updated_at' => now()],

            //dry erase
            ['VariantID' => 1, 'ProductID' => 84, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 84, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 84, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker1_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 85, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 85, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker2_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 86, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 86, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker3_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 86, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker3_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 87, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 87, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 87, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker4_image3.png', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 18, 'ProductID' => 88, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 88, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker5_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 88, 'Image' => '/assets/markers/dry_erase_markers/dryerasemarker5_image3.png', 'created_at' => now(), 'updated_at' => now()],

            //highlighter
            ['VariantID' => 1, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image5.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 18, 'ProductID' => 89, 'Image' => '/assets/markers/highlighters/highlighters1_image6.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 90, 'Image' => '/assets/markers/highlighters/highlighters2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 90, 'Image' => '/assets/markers/highlighters/highlighters2_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 90, 'Image' => '/assets/markers/highlighters/highlighters2_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 91, 'Image' => '/assets/markers/highlighters/highlighters3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 91, 'Image' => '/assets/markers/highlighters/highlighters3_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 92, 'Image' => '/assets/markers/highlighters/highlighters4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 32, 'ProductID' => 92, 'Image' => '/assets/markers/highlighters/highlighters4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 92, 'Image' => '/assets/markers/highlighters/highlighters4_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 92, 'Image' => '/assets/markers/highlighters/highlighters4_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 92, 'Image' => '/assets/markers/highlighters/highlighters4_image5.png', 'created_at' => now(), 'updated_at' => now()],

            //paint markers
            ['VariantID' => 1, 'ProductID' => 93, 'Image' => '/assets/markers/paint_markers/paintmarker1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 93, 'Image' => '/assets/markers/paint_markers/paintmarker1_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 94, 'Image' => '/assets/markers/paint_markers/paintmarker2_image1.png', 'created_at' => now(), 'updated_at' => now()],

            //others
            //pencil case
            ['VariantID' => 50, 'ProductID' => 95, 'Image' => '/assets/others/pencil_cases/pencilcase1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 95, 'Image' => '/assets/others/pencil_cases/pencilcase1_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 96, 'Image' => '/assets/others/pencil_cases/pencilcase2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 96, 'Image' => '/assets/others/pencil_cases/pencilcase2_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 97, 'Image' => '/assets/others/pencil_cases/pencilcase3_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 98, 'Image' => '/assets/others/pencil_cases/pencilcase4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 57, 'ProductID' => 98, 'Image' => '/assets/others/pencil_cases/pencilcase4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 98, 'Image' => '/assets/others/pencil_cases/pencilcase4_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 34, 'ProductID' => 99, 'Image' => '/assets/others/pencil_cases/pencilcase5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 34, 'ProductID' => 99, 'Image' => '/assets/others/pencil_cases/pencilcase5_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 33, 'ProductID' => 99, 'Image' => '/assets/others/pencil_cases/pencilcase5_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 35, 'ProductID' => 99, 'Image' => '/assets/others/pencil_cases/pencilcase5_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 46, 'ProductID' => 100, 'Image' => '/assets/others/pencil_cases/pencilcase6_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 46, 'ProductID' => 100, 'Image' => '/assets/others/pencil_cases/pencilcase6_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 47, 'ProductID' => 100, 'Image' => '/assets/others/pencil_cases/pencilcase6_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 48, 'ProductID' => 100, 'Image' => '/assets/others/pencil_cases/pencilcase6_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 49, 'ProductID' => 100, 'Image' => '/assets/others/pencil_cases/pencilcase6_image5.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 101, 'Image' => '/assets/others/pencil_cases/pencilcase7_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 102, 'Image' => '/assets/others/pencil_cases/pencilcase8_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 102, 'Image' => '/assets/others/pencil_cases/pencilcase8_image2.png', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 51, 'ProductID' => 103, 'Image' => '/assets/others/pencil_cases/pencilcase9_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 51, 'ProductID' => 103, 'Image' => '/assets/others/pencil_cases/pencilcase9_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 34, 'ProductID' => 103, 'Image' => '/assets/others/pencil_cases/pencilcase9_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 35, 'ProductID' => 103, 'Image' => '/assets/others/pencil_cases/pencilcase9_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 33, 'ProductID' => 103, 'Image' => '/assets/others/pencil_cases/pencilcase9_image5.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 104, 'Image' => '/assets/others/pencil_cases/pencilcase10_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 105, 'Image' => '/assets/others/pencil_cases/pencilcase11_image1.png', 'created_at' => now(), 'updated_at' => now()],

            //rulers
            ['VariantID' => 10, 'ProductID' => 106, 'Image' => '/assets/others/rulers/ruler1_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 107, 'Image' => '/assets/others/rulers/ruler2_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 108, 'Image' => '/assets/others/rulers/ruler3_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 109, 'Image' => '/assets/others/rulers/ruler4_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 110, 'Image' => '/assets/others/rulers/ruler5_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 110, 'Image' => '/assets/others/rulers/ruler5_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 110, 'Image' => '/assets/others/rulers/ruler5_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 110, 'Image' => '/assets/others/rulers/ruler5_image4.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 111, 'Image' => '/assets/others/rulers/ruler6_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 54, 'ProductID' => 111, 'Image' => '/assets/others/rulers/ruler6_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 58, 'ProductID' => 111, 'Image' => '/assets/others/rulers/ruler6_image3.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 59, 'ProductID' => 111, 'Image' => '/assets/others/rulers/ruler6_image4.png', 'created_at' => now(), 'updated_at' => now()],

            //stapler
            ['VariantID' => 8, 'ProductID' => 112, 'Image' => '/assets/others/staplers/stapler1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 112, 'Image' => '/assets/others/staplers/stapler1_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 113, 'Image' => '/assets/others/staplers/stapler2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 113, 'Image' => '/assets/others/staplers/stapler2_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 114, 'Image' => '/assets/others/staplers/stapler3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 114, 'Image' => '/assets/others/staplers/stapler3_image2.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 115, 'Image' => '/assets/others/staplers/stapler4_image1.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 116, 'Image' => '/assets/others/staplers/stapler5_image1.png', 'created_at' => now(), 'updated_at' => now()],

            //organizers
            ['VariantID' => 60, 'ProductID' => 117, 'Image' => '/assets/others/organizers/organizer1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 60, 'ProductID' => 117, 'Image' => '/assets/others/organizers/organizer1_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 60, 'ProductID' => 117, 'Image' => '/assets/others/organizers/organizer1_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 11, 'ProductID' => 118, 'Image' => '/assets/others/organizers/organizer2_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 118, 'Image' => '/assets/others/organizers/organizer2_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 118, 'Image' => '/assets/others/organizers/organizer2_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 119, 'Image' => '/assets/others/organizers/organizer3_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 119, 'Image' => '/assets/others/organizers/organizer3_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 119, 'Image' => '/assets/others/organizers/organizer3_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 120, 'Image' => '/assets/others/organizers/organizer4_image5.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 120, 'Image' => '/assets/others/organizers/organizer4_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 120, 'Image' => '/assets/others/organizers/organizer4_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 120, 'Image' => '/assets/others/organizers/organizer4_image2.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 45, 'ProductID' => 120, 'Image' => '/assets/others/organizers/organizer4_image3.png', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 121, 'Image' => '/assets/others/organizers/organizer5_image1.png', 'created_at' => now(), 'updated_at' => now()],

            //cutting mat
            ['VariantID' => 44, 'ProductID' => 122, 'Image' => '/assets/others/cutting_mats/cuttingmat1_image1.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 43, 'ProductID' => 122, 'Image' => '/assets/others/cutting_mats/cuttingmat1_image2.png', 'created_at' => now(), 'updated_at' => now()],

            // Writing Paper
            ['VariantID' => 1, 'ProductID' => 123, 'Image' => '/assets/books_papers/writing_paper/writingpaper1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 124, 'Image' => '/assets/books_papers/writing_paper/writingpaper2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 61, 'ProductID' => 124, 'Image' => '/assets/books_papers/writing_paper/writingpaper2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 62, 'ProductID' => 124, 'Image' => '/assets/books_papers/writing_paper/writingpaper2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 63, 'ProductID' => 125, 'Image' => '/assets/books_papers/writing_paper/writingpaper4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 64, 'ProductID' => 125, 'Image' => '/assets/books_papers/writing_paper/writingpaper4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 126, 'Image' => '/assets/books_papers/writing_paper/writingpaper3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 126, 'Image' => '/assets/books_papers/writing_paper/writingpaper3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 126, 'Image' => '/assets/books_papers/writing_paper/writingpaper3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 126, 'Image' => '/assets/books_papers/writing_paper/writingpaper3_image4.png', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 32, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 50, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image6.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 57, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image7.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 127, 'Image' => '/assets/books_papers/writing_paper/writingpaper5_image5.svg', 'created_at' => now(), 'updated_at' => now()],

             //Printing Paper
            ['VariantID' => 1, 'ProductID' => 128, 'Image' => '/assets/books_papers/printing_paper/printingpaper1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 129, 'Image' => '/assets/books_papers/printing_paper/printingpaper2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 130, 'Image' => '/assets/books_papers/printing_paper/printingpaper3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 131, 'Image' => '/assets/books_papers/printing_paper/printingpaper4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 132, 'Image' => '/assets/books_papers/printing_paper/printingpaper5_image1.svg', 'created_at' => now(), 'updated_at' => now()],

             // Specialty Paper
            ['VariantID' => 1, 'ProductID' => 133, 'Image' => '/assets/books_papers/origami_paper/origamipaper1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 133, 'Image' => '/assets/books_papers/origami_paper/origamipaper1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 133, 'Image' => '/assets/books_papers/origami_paper/origamipaper1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 134, 'Image' => '/assets/books_papers/origami_paper/origamipaper2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 134, 'Image' => '/assets/books_papers/origami_paper/origamipaper2_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 135, 'Image' => '/assets/books_papers/origami_paper/origamipaper3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 135, 'Image' => '/assets/books_papers/origami_paper/origamipaper3_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 136, 'Image' => '/assets/books_papers/origami_paper/origamipaper4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 137, 'Image' => '/assets/books_papers/origami_paper/origamipaper5_image1.svg', 'created_at' => now(), 'updated_at' => now()],


            // Sticky Notes
            ['VariantID' => 65, 'ProductID' => 138, 'Image' => '/assets/books_papers/sticky_notes/stickynotes1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 32, 'ProductID' => 138, 'Image' => '/assets/books_papers/sticky_notes/stickynotes1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 138, 'Image' => '/assets/books_papers/sticky_notes/stickynotes1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 139, 'Image' => '/assets/books_papers/sticky_notes/stickynotes2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 140, 'Image' => '/assets/books_papers/sticky_notes/stickynotes3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 141, 'Image' => '/assets/books_papers/sticky_notes/stickynotes4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 65, 'ProductID' => 142, 'Image' => '/assets/books_papers/sticky_notes/stickynotes5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 41, 'ProductID' => 142, 'Image' => '/assets/books_papers/sticky_notes/stickynotes5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 67, 'ProductID' => 142, 'Image' => '/assets/books_papers/sticky_notes/stickynotes5_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            // Notebooks
            ['VariantID' => 1, 'ProductID' => 143, 'Image' => '/assets/books_papers/notebooks/notebooks1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 68, 'ProductID' => 143, 'Image' => '/assets/books_papers/notebooks/notebooks1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 69, 'ProductID' => 143, 'Image' => '/assets/books_papers/notebooks/notebooks1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 70, 'ProductID' => 143, 'Image' => '/assets/books_papers/notebooks/notebooks1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 71, 'ProductID' => 143, 'Image' => '/assets/books_papers/notebooks/notebooks1_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 144, 'Image' => '/assets/books_papers/notebooks/notebooks2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 71, 'ProductID' => 144, 'Image' => '/assets/books_papers/notebooks/notebooks2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 69, 'ProductID' => 144, 'Image' => '/assets/books_papers/notebooks/notebooks2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 145, 'Image' => '/assets/books_papers/notebooks/notebooks3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 146, 'Image' => '/assets/books_papers/notebooks/notebooks4_image6.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 146, 'Image' => '/assets/books_papers/notebooks/notebooks4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 72, 'ProductID' => 146, 'Image' => '/assets/books_papers/notebooks/notebooks4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 16, 'ProductID' => 146, 'Image' => '/assets/books_papers/notebooks/notebooks4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 73, 'ProductID' => 146, 'Image' => '/assets/books_papers/notebooks/notebooks4_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 147, 'Image' => '/assets/books_papers/notebooks/notebooks5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 147, 'Image' => '/assets/books_papers/notebooks/notebooks5_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 73, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 16, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image7.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 57, 'ProductID' => 148, 'Image' => '/assets/books_papers/notebooks/notebooks6_image6.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 149, 'Image' => '/assets/books_papers/notebooks/notebooks7_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 149, 'Image' => '/assets/books_papers/notebooks/notebooks7_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 149, 'Image' => '/assets/books_papers/notebooks/notebooks7_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 149, 'Image' => '/assets/books_papers/notebooks/notebooks7_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 150, 'Image' => '/assets/books_papers/notebooks/notebooks8_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 74, 'ProductID' => 150, 'Image' => '/assets/books_papers/notebooks/notebooks8_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 75, 'ProductID' => 150, 'Image' => '/assets/books_papers/notebooks/notebooks8_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 76, 'ProductID' => 150, 'Image' => '/assets/books_papers/notebooks/notebooks8_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            // Planner
            ['VariantID' => 1, 'ProductID' => 151, 'Image' => '/assets/books_papers/planner/planner1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 151, 'Image' => '/assets/books_papers/planner/planner1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 152, 'Image' => '/assets/books_papers/planner/planner2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 152, 'Image' => '/assets/books_papers/planner/planner2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 152, 'Image' => '/assets/books_papers/planner/planner2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 153, 'Image' => '/assets/books_papers/planner/planner3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 153, 'Image' => '/assets/books_papers/planner/planner3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 153, 'Image' => '/assets/books_papers/planner/planner3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 153, 'Image' => '/assets/books_papers/planner/planner3_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 154, 'Image' => '/assets/books_papers/planner/planner4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 154, 'Image' => '/assets/books_papers/planner/planner4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 77, 'ProductID' => 154, 'Image' => '/assets/books_papers/planner/planner4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 78, 'ProductID' => 154, 'Image' => '/assets/books_papers/planner/planner4_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 155, 'Image' => '/assets/books_papers/planner/planner5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 155, 'Image' => '/assets/books_papers/planner/planner5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 155, 'Image' => '/assets/books_papers/planner/planner5_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 155, 'Image' => '/assets/books_papers/planner/planner5_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 156, 'Image' => '/assets/books_papers/planner/planner6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 156, 'Image' => '/assets/books_papers/planner/planner6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 156, 'Image' => '/assets/books_papers/planner/planner6_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            // Sketchbooks
            ['VariantID' => 1, 'ProductID' => 157, 'Image' => '/assets/books_papers/sketchbook/sketchbook1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 157, 'Image' => '/assets/books_papers/sketchbook/sketchbook1_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 158, 'Image' => '/assets/books_papers/sketchbook/sketchbook2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 158, 'Image' => '/assets/books_papers/sketchbook/sketchbook2_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 159, 'Image' => '/assets/books_papers/sketchbook/sketchbook3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 159, 'Image' => '/assets/books_papers/sketchbook/sketchbook3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 79, 'ProductID' => 159, 'Image' => '/assets/books_papers/sketchbook/sketchbook3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 80, 'ProductID' => 159, 'Image' => '/assets/books_papers/sketchbook/sketchbook3_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 160, 'Image' => '/assets/books_papers/sketchbook/sketchbook4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 161, 'Image' => '/assets/books_papers/sketchbook/sketchbook5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 162, 'Image' => '/assets/books_papers/sketchbook/sketchbook6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 163, 'Image' => '/assets/books_papers/sketchbook/sketchbook7_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 164, 'Image' => '/assets/books_papers/sketchbook/sketchbook8_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
            // Guestbooks
            ['VariantID' => 1, 'ProductID' => 165, 'Image' => '/assets/books_papers/guestbook/guestbook1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 165, 'Image' => '/assets/books_papers/guestbook/guestbook1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 166, 'Image' => '/assets/books_papers/guestbook/guestbook2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 166, 'Image' => '/assets/books_papers/guestbook/guestbook2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 166, 'Image' => '/assets/books_papers/guestbook/guestbook2_image5.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 166, 'Image' => '/assets/books_papers/guestbook/guestbook2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 166, 'Image' => '/assets/books_papers/guestbook/guestbook2_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 167, 'Image' => '/assets/books_papers/guestbook/guestbook3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 167, 'Image' => '/assets/books_papers/guestbook/guestbook3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 168, 'Image' => '/assets/books_papers/guestbook/guestbook4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 19, 'ProductID' => 168, 'Image' => '/assets/books_papers/guestbook/guestbook4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 81, 'ProductID' => 168, 'Image' => '/assets/books_papers/guestbook/guestbook4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 169, 'Image' => '/assets/books_papers/guestbook/guestbook5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 169, 'Image' => '/assets/books_papers/guestbook/guestbook5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            
            // Tape
            ['VariantID' => 1, 'ProductID' => 170, 'Image' => '/assets/correcting_tools/tape/tape1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 170, 'Image' => '/assets/correcting_tools/tape/tape1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 170, 'Image' => '/assets/correcting_tools/tape/tape1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 9, 'ProductID' => 171, 'Image' => '/assets/correcting_tools/tape/tape2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 14, 'ProductID' => 171, 'Image' => '/assets/correcting_tools/tape/tape2_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 171, 'Image' => '/assets/correcting_tools/tape/tape2_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 172, 'Image' => '/assets/correcting_tools/tape/tape3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 172, 'Image' => '/assets/correcting_tools/tape/tape3_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 173, 'Image' => '/assets/correcting_tools/tape/tape4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 173, 'Image' => '/assets/correcting_tools/tape/tape4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 82, 'ProductID' => 174, 'Image' => '/assets/correcting_tools/tape/tape5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 174, 'Image' => '/assets/correcting_tools/tape/tape5_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 73, 'ProductID' => 174, 'Image' => '/assets/correcting_tools/tape/tape5_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 175, 'Image' => '/assets/correcting_tools/tape/tape6_image    1.svg', 'created_at' => now(), 'updated_at' => now()],

            // Liquid
            ['VariantID' => 1, 'ProductID' => 176, 'Image' => '/assets/correcting_tools/liquid/liquid1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 177, 'Image' => '/assets/correcting_tools/liquid/liquid2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 178, 'Image' => '/assets/correcting_tools/liquid/liquid3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 179, 'Image' => '/assets/correcting_tools/liquid/liquid4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 180, 'Image' => '/assets/correcting_tools/liquid/liquid5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 181, 'Image' => '/assets/correcting_tools/liquid/liquid6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 182, 'Image' => '/assets/correcting_tools/liquid/liquid7_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            // Eraser
            ['VariantID' => 1, 'ProductID' => 183, 'Image' => '/assets/correcting_tools/eraser/eraser1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 184, 'Image' => '/assets/correcting_tools/eraser/eraser2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 185, 'Image' => '/assets/correcting_tools/eraser/eraser3_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 186, 'Image' => '/assets/correcting_tools/eraser/eraser4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 187, 'Image' => '/assets/correcting_tools/eraser/eraser5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 188, 'Image' => '/assets/correcting_tools/eraser/eraser6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 189, 'Image' => '/assets/correcting_tools/eraser/eraser7_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            //sticking tools
            //glue stick
            ['VariantID' => 83, 'ProductID' => 190, 'Image' => '/assets/sticking_tools/glue_stick/gluestick1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 83, 'ProductID' => 190, 'Image' => '/assets/sticking_tools/glue_stick/gluestick1_image4.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 84, 'ProductID' => 190, 'Image' => '/assets/sticking_tools/glue_stick/gluestick1_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 85, 'ProductID' => 190, 'Image' => '/assets/sticking_tools/glue_stick/gluestick1_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 191, 'Image' => '/assets/sticking_tools/glue_stick/gluestick2_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 192, 'Image' => '/assets/sticking_tools/glue_stick/gluestick3_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 193, 'Image' => '/assets/sticking_tools/glue_stick/gluestick4_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 194, 'Image' => '/assets/sticking_tools/glue_stick/gluestick5_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 86, 'ProductID' => 195, 'Image' => '/assets/sticking_tools/glue_stick/gluestick6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 87, 'ProductID' => 195, 'Image' => '/assets/sticking_tools/glue_stick/gluestick6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 88, 'ProductID' => 195, 'Image' => '/assets/sticking_tools/glue_stick/gluestick6_image3.svg', 'created_at' => now(), 'updated_at' => now()],


            //liquid glue
            ['VariantID' => 1, 'ProductID' => 196, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue1_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 197, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue2_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 198, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue3_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 199, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 199, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue4_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 200, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue5_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 89, 'ProductID' => 201, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 89, 'ProductID' => 201, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue6_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 90, 'ProductID' => 201, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue6_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 91, 'ProductID' => 201, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue6_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 202, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue7_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 9, 'ProductID' => 203, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue8_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 203, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue8_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 8, 'ProductID' => 204, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue9_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 204, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue9_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 204, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue9_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 92, 'ProductID' => 205, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue10_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 92, 'ProductID' => 205, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue10_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 93, 'ProductID' => 205, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue10_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 94, 'ProductID' => 205, 'Image' => '/assets/sticking_tools/liquid_glue/liquidglue10_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            //tape
            ['VariantID' => 97, 'ProductID' => 206, 'Image' => '/assets/sticking_tools/tape/tape1_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 97, 'ProductID' => 206, 'Image' => '/assets/sticking_tools/tape/tape1_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 206, 'Image' => '/assets/sticking_tools/tape/tape1_image3.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 207, 'Image' => '/assets/sticking_tools/tape/tape2_image1.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 96, 'ProductID' => 208, 'Image' => '/assets/sticking_tools/tape/tape3_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 95, 'ProductID' => 208, 'Image' => '/assets/sticking_tools/tape/tape3_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 15, 'ProductID' => 209, 'Image' => '/assets/sticking_tools/tape/tape4_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 15, 'ProductID' => 209, 'Image' => '/assets/sticking_tools/tape/tape4_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 55, 'ProductID' => 209, 'Image' => '/assets/sticking_tools/tape/tape4_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 8, 'ProductID' => 209, 'Image' => '/assets/sticking_tools/tape/tape4_image4.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 210, 'Image' => '/assets/sticking_tools/tape/tape5_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 210, 'Image' => '/assets/sticking_tools/tape/tape5_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 211, 'Image' => '/assets/sticking_tools/tape/tape6_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 211, 'Image' => '/assets/sticking_tools/tape/tape6_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 10, 'ProductID' => 212, 'Image' => '/assets/sticking_tools/tape/tape7_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 10, 'ProductID' => 212, 'Image' => '/assets/sticking_tools/tape/tape7_image2.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 11, 'ProductID' => 212, 'Image' => '/assets/sticking_tools/tape/tape7_image3.svg', 'created_at' => now(), 'updated_at' => now()],
            
            ['VariantID' => 1, 'ProductID' => 213, 'Image' => '/assets/sticking_tools/tape/tape8_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 213, 'Image' => '/assets/sticking_tools/tape/tape8_image2.svg', 'created_at' => now(), 'updated_at' => now()],

            ['VariantID' => 1, 'ProductID' => 214, 'Image' => '/assets/sticking_tools/tape/tape9_image1.svg', 'created_at' => now(), 'updated_at' => now()],
            ['VariantID' => 1, 'ProductID' => 214, 'Image' => '/assets/sticking_tools/tape/tape9_image2.svg', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
