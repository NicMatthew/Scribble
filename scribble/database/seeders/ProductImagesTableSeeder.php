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

            // cutting tools




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

        ]);
    }
}
