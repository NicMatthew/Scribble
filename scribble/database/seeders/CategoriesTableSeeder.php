<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['NameCategory' => 'Pens', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Pencils', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Markers', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Papers', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Books', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Cutting Tools', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Sticking Tools', 'created_at' => now(), 'updated_at' => now()],
            ['NameCategory' => 'Correcting Tools', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
