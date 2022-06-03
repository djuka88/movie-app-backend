<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 1' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 2' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 3' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 4' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 5' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 6' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 7' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 8' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 9' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 10' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 11' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 1, 'text' => 'Komentar 12' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'text' => 'Komentar 1' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'text' => 'Komentar 2' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'text' => 'Komentar 3' ,'created_at'=>date("Y-m-d H:i:s")],
            ['user_id'=> 1, 'movie_id'=> 2, 'text' => 'Komentar 4' ,'created_at'=>date("Y-m-d H:i:s")],
        ]);
    }
}
