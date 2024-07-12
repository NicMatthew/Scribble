<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['NameUser' => 'scribble', 
            'EmailUser' => 'scribble@gmail.com', 
            'password' => Hash::make('12345678'),
            'DOBUser' => '2024-07-11',
            'RoleUser' => '1',
            'ImageUser' =>'data:image/jpeg;base64,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',
            'PhoneNumberUser' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
            ]
        ]);
        DB::table('users')->insert([
            ['NameUser' => 'admin', 
            'EmailUser' => 'admin@gmail.com', 
            'password' => Hash::make('12345678'),
            'DOBUser' => '2024-07-11',
            'RoleUser' => '0',
            'ImageUser' =>'data:image/jpeg;base64,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',
            'PhoneNumberUser' => '12345678',
            'created_at' => now(),
            'updated_at' => now()
            ]
        ]);

        DB::table('addresses')->insert([
            [
                'UserID' => '1',
                'AddressName' => 'RTB',
                'RecipientName' => 'Scribble',
                'PostCode' => '11610',
                'FullAddress' => 'Jl. Pakuan No.3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat',
                'PhoneNumber' => '12345678'
            ]
            ]);
    }
}