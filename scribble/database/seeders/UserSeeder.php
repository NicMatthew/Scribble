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
            'ImageUser' =>"/icons/profile-pink.svg",
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
            'ImageUser' =>"/icons/profile-pink.svg",
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
