<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
            // Pens Subcategories
            ['CategoryProductID' => 1, 'NameSubCategory' => 'Ballpoint pens', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 1, 'NameSubCategory' => 'Fountain pens', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 1, 'NameSubCategory' => 'Marker pens', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 1, 'NameSubCategory' => 'Specialty pens', 'created_at' => now(), 'updated_at' => now()],

            // Pencils Subcategories
            ['CategoryProductID' => 2, 'NameSubCategory' => 'Woodcase pencils', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 2, 'NameSubCategory' => 'Mechanical pencils', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 2, 'NameSubCategory' => 'Colored pencils', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 2, 'NameSubCategory' => 'Charcoal pencils', 'created_at' => now(), 'updated_at' => now()],

            // Markers Subcategories
            ['CategoryProductID' => 3, 'NameSubCategory' => 'Permanent markers', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 3, 'NameSubCategory' => 'Dry erase markers', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 3, 'NameSubCategory' => 'Highlighters', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 3, 'NameSubCategory' => 'Paint markers', 'created_at' => now(), 'updated_at' => now()],

            // Papers Subcategories
            ['CategoryProductID' => 4, 'NameSubCategory' => 'Writing paper', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 4, 'NameSubCategory' => 'Printing paper', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 4, 'NameSubCategory' => 'Specialty paper', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 4, 'NameSubCategory' => 'Sticky notes', 'created_at' => now(), 'updated_at' => now()],

            // Books Subcategories
            ['CategoryProductID' => 5, 'NameSubCategory' => 'Notebooks', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 5, 'NameSubCategory' => 'Planners', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 5, 'NameSubCategory' => 'Sketchbooks', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 5, 'NameSubCategory' => 'Guestbooks', 'created_at' => now(), 'updated_at' => now()],

            // Cutting Tools Subcategories
            ['CategoryProductID' => 6, 'NameSubCategory' => 'Scissors', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 6, 'NameSubCategory' => 'Craft knives', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 6, 'NameSubCategory' => 'Pinking shears', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 6, 'NameSubCategory' => 'Rotary cutters', 'created_at' => now(), 'updated_at' => now()],

            // Sticking Tools Subcategories
            ['CategoryProductID' => 7, 'NameSubCategory' => 'Glue sticks', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 7, 'NameSubCategory' => 'Liquid glue', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 7, 'NameSubCategory' => 'Tape', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 7, 'NameSubCategory' => 'Glue dots', 'created_at' => now(), 'updated_at' => now()],

            // Correcting Tools Subcategories
            ['CategoryProductID' => 8, 'NameSubCategory' => 'White out correction tape', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 8, 'NameSubCategory' => 'Correction fluid', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 8, 'NameSubCategory' => 'Erasers', 'created_at' => now(), 'updated_at' => now()],
            ['CategoryProductID' => 8, 'NameSubCategory' => 'Correction pens', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
