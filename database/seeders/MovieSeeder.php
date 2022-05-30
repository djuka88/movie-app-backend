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
            [
                'title' => 'Schindler\'s List',
                'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Star Wars',
                'description' => 'Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire\'s world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNzg4MjQxNTQtZmI5My00YjMwLWJlMjUtMmJlY2U2ZWFlNzY1XkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Some Like It Hot',
                'description' => 'After two male musicians witness a mob hit, they flee the state in an all-female band disguised as women, but further complications set in.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNzAyOGIxYjAtMGY2NC00ZTgyLWIwMWEtYzY0OWQ4NDFjOTc5XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Taxi Driver',
                'description' => 'A mentally unstable veteran works as a nighttime taxi driver in New York City, where the perceived decadence and sleaze fuels his urge for violent action.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BM2M1MmVhNDgtNmI0YS00ZDNmLTkyNjctNTJiYTQ2N2NmYzc2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Rear Window',
                'description' => 'A wheelchair-bound photographer spies on his neighbors from his Greenwich Village courtyard apartment window, and becomes convinced one of them has committed murder, despite the skepticism of his fashion-model girlfriend.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNGUxYWM3M2MtMGM3Mi00ZmRiLWE0NGQtZjE5ODI2OTJhNTU0XkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'The Lord of the Rings: The Fellowship of the Ring',
                'description' => 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => '2001: A Space Odyssey',
                'description' => 'The Monoliths push humanity to reach for the stars; after their discovery in Africa generations ago, the mysterious objects lead mankind on an awesome journey to Jupiter, with the help of H.A.L. 9000: the world\'s greatest supercomputer.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BMmNlYzRiNDctZWNhMi00MzI4LThkZTctMTUzMmZkMmFmNThmXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Goodfellas',
                'description' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Alien',
                'description' => 'The crew of a commercial spacecraft encounter a deadly lifeform after investigating an unknown transmission.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BOGQzZTBjMjQtOTVmMS00NGE5LWEyYmMtOGQ1ZGZjNmRkYjFhXkEyXkFqcGdeQXVyMjUzOTY1NTc@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => '365 Days: This Day',
                'description' => 'Laura and Massimo are back and stronger than ever. But Massimo\'s family ties and a mysterious man bidding for Laura\'s heart complicate the lovers\' lives.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BMGZmNDg1NDUtM2I3MC00Mjg1LTgyZWUtZmYwYTVjNmRmMDQ0XkEyXkFqcGdeQXVyMTUyMzk0ODY3._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
            [
                'title' => 'The Silence of the Lambs',
                'description' => 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.',
                'cover_image' => 'https://m.media-amazon.com/images/M/MV5BNjNhZTk0ZmEtNjJhMi00YzFlLWE1MmEtYzM1M2ZmMGMwMTU4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_.jpg',
                'created_at' => date("Y-m-d H:i:s")
            ],
        ]);
    }
}
