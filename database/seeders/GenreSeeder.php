<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['name'=>'Action', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Comedy', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Drama', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Fantasy', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Horror', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Mystery', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Romance', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Thriller', 'created_at'=>date("Y-m-d H:i:s")],
            ['name'=>'Western', 'created_at'=>date("Y-m-d H:i:s")],
        ]);
    }
}