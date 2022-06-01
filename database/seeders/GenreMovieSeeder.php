<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie')->insert([
            [
                'movie_id' => 1,
                'genre_id' => 1
            ],
            [
                'movie_id' => 1,
                'genre_id' => 10
            ],
            [
                'movie_id' => 2,
                'genre_id' => 6
            ],
            [
                'movie_id' => 2,
                'genre_id' => 8
            ],
            [
                'movie_id' => 3,
                'genre_id' => 3
            ],
            [
                'movie_id' => 3,
                'genre_id' => 11
            ],
            [
                'movie_id' => 4,
                'genre_id' => 1
            ],
            [
                'movie_id' => 4,
                'genre_id' => 10
            ],
            [
                'movie_id' => 4,
                'genre_id' => 12
            ],
            [
                'movie_id' => 5,
                'genre_id' => 2
            ],
            [
                'movie_id' => 5,
                'genre_id' => 3
            ],
            [
                'movie_id' => 5,
                'genre_id' => 7
            ],
            [
                'movie_id' => 6,
                'genre_id' => 3
            ],
            [
                'movie_id' => 6,
                'genre_id' => 11
            ],
            [
                'movie_id' => 7,
                'genre_id' => 5
            ],
            [
                'movie_id' => 7,
                'genre_id' => 6
            ],
            [
                'movie_id' => 7,
                'genre_id' => 8
            ],
            [
                'movie_id' => 8,
                'genre_id' => 2
            ],
            [
                'movie_id' => 8,
                'genre_id' => 10
            ],
            [
                'movie_id' => 8,
                'genre_id' => 12
            ],
            [
                'movie_id' => 9,
                'genre_id' => 9
            ],
            [
                'movie_id' => 9,
                'genre_id' => 12
            ],
            [
                'movie_id' => 10,
                'genre_id' => 3
            ],
            [
                'movie_id' => 10,
                'genre_id' => 13
            ],
            [
                'movie_id' => 10,
                'genre_id' => 14
            ],
            [
                'movie_id' => 11,
                'genre_id' => 1
            ],
            [
                'movie_id' => 11,
                'genre_id' => 4
            ],
            [
                'movie_id' => 11,
                'genre_id' => 12
            ],
            [
                'movie_id' => 12,
                'genre_id' => 2
            ],
            [
                'movie_id' => 12,
                'genre_id' => 7
            ],
            [
                'movie_id' => 12,
                'genre_id' => 15
            ],
            [
                'movie_id' => 13,
                'genre_id' => 3
            ],
            [
                'movie_id' => 13,
                'genre_id' => 11
            ],
            [
                'movie_id' => 14,
                'genre_id' => 6
            ],
            [
                'movie_id' => 14,
                'genre_id' => 8
            ],
            [
                'movie_id' => 15,
                'genre_id' => 1
            ],
            [
                'movie_id' => 15,
                'genre_id' => 3
            ],
            [
                'movie_id' => 15,
                'genre_id' => 12
            ],
            [
                'movie_id' => 16,
                'genre_id' => 10
            ],
            [
                'movie_id' => 16,
                'genre_id' => 12
            ],
            [
                'movie_id' => 17,
                'genre_id' => 3
            ],
            [
                'movie_id' => 17,
                'genre_id' => 11
            ],
            [
                'movie_id' => 17,
                'genre_id' => 13
            ],
            [
                'movie_id' => 18,
                'genre_id' => 5
            ],
            [
                'movie_id' => 18,
                'genre_id' => 10
            ],
            [
                'movie_id' => 19,
                'genre_id' => 3
            ],
            [
                'movie_id' => 19,
                'genre_id' => 7
            ],
            [
                'movie_id' => 20,
                'genre_id' => 3
            ],
            [
                'movie_id' => 20,
                'genre_id' => 7
            ],
            [
                'movie_id' => 21,
                'genre_id' => 3
            ],
            [
                'movie_id' => 21,
                'genre_id' => 8
            ],
            [
                'movie_id' => 21,
                'genre_id' => 11
            ]
        ]);
    }
}
