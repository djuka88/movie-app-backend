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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Milan',
            'email' => 'djuka.kn@gmail.com',
            'password' => Hash::make('piramida'),
            'created_at'=> date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Marko',
            'email' => 'marko1@gmail.com',
            'password' => Hash::make('piramida'),
            'created_at'=> date("Y-m-d H:i:s"),
        ],
        [
            'name' => 'Pera',
            'email' => 'pera1@gmail.com',
            'password' => Hash::make('piramida'),
            'created_at'=> date("Y-m-d H:i:s"),
        ],
    ]);
    }
}
