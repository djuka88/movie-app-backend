<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watch_lists')->insert([
            ['user_id'=> 1, 'movie_id'=> 1, 'watched' => 1 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'watched' => 1 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 3, 'watched' => 0 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 4, 'watched' => 0 ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 5, 'watched' => 1 ,'created_at'=>date("Y-m-d H:i:s")],
        ]);
    }
}
