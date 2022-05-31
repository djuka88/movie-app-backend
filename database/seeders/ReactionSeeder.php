<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ReactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactions')->insert([
            ['user_id'=> 1, 'movie_id'=> 1, 'like' => 1 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 2, 'movie_id'=> 1, 'like' => 1 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 3, 'movie_id'=> 1, 'like' => 0 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'like' => 0 ,'created_at'=>date("Y-m-d H:i:s")],
        ]);
    }
}
