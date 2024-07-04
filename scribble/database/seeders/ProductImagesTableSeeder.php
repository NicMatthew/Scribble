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
        ]);
    }
}
