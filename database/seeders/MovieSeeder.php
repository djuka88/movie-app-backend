<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Terminator',
                'description' => 'A human soldier is sent from 2029 to 1984 to stop an almost indestructible cyborg killing machine, sent from the same year, which has been programmed to execute a young woman whose unborn son is the key to humanity\'s future salvation.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BYTViNzMxZjEtZGEwNy00MDNiLWIzNGQtZDY2MjQ1OWViZjFmXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at'=> date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Shutter Island',
                'description' => 'In 1954, a U.S. Marshal investigates the disappearance of a murderer who escaped from a hospital for the criminally insane.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BYzhiNDkyNzktNTZmYS00ZTBkLTk2MDAtM2U0YjU1MzgxZjgzXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => '12 Angry Men',
                'description' => 'The jury in a New York City murder trial is frustrated by a single member whose skeptical caution forces them to more carefully consider the evidence before jumping to a hasty verdict.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Independence Day',
                'description' => 'The aliens are coming and their goal is to invade and destroy Earth. Fighting superior technology, mankind\'s best weapon is the will to survive.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BMGQwNDNkMmItYWY1Yy00YTZmLWE5OTAtODU0MGZmMzQ1NDdkXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'P.S. I Love You',
                'description' => 'A young widow discovers that her late husband has left her 10 messages intended to help ease her pain and start a new life.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNTg2MDg4MjI5NV5BMl5BanBnXkFtZTcwMzQ0MDczMw@@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Psycho',
                'description' => 'A Phoenix secretary embezzles $40,000 from her employer\'s client, goes on the run, and checks into a remote motel run by a young man under the domination of his mother.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNTQwNDM1YzItNDAxZC00NWY2LTk0M2UtNDIwNWI5OGUyNWUxXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Back to the Future',
                'description' => 'Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'The Good, the Bad and the Ugly',
                'description' => 'A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNjJlYmNkZGItM2NhYy00MjlmLTk5NmQtNjg1NmM2ODU4OTMwXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
