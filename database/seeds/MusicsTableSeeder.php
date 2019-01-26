<?php

use Illuminate\Database\Seeder;
use App\Music;


class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Music::insert([
            [
                'id' => 1,
                'title' => 'Sweet but Psycho',
                'artist' => 'Ava Max',
                'position' => 1,
                'last_week' => 2,
                'total_weeks' => 11,
                'youtube_id' => 'WXBHCQYxwr0',
                'more_info' => 'https://www.top40.nl/ava-max-1/sweet-but-psycho-1-31526'
            ],
            [
                'id' => 2,
                'title' => 'High Hopes',
                'artist' => 'Panic! At The Disco',
                'position' => 2,
                'last_week' => 3,
                'total_weeks' => 8,
                'youtube_id' => 'IPXIgEAGe4U',
                'more_info' => 'https://www.top40.nl/panic-at-the-disco-4/high-hopes-2-31628'
            ],
            [
                'id' => 3,
                'title' => 'Duurt te lang',
                'artist' => 'Davina Michelle',
                'position' => 3,
                'last_week' => 1,
                'total_weeks' => 14,
                'youtube_id' => 'n_j1clPqEvg',
                'more_info' => 'https://www.top40.nl/davina-michelle-4/duurt-te-lang-1-31428'
            ],
            [
                'id' => 4,
                'title' => 'Ijskoud',
                'artist' => 'Nielson',
                'position' => 4,
                'last_week' => 6,
                'total_weeks' => 15,
                'youtube_id' => 'L__V3s-wQuY',
                'more_info' => 'https://www.top40.nl/nielson-16/ijskoud-1-31333'
            ],
            [
                'id' => 5,
                'title' => 'Hij Is Van Mij',
                'artist' => 'Kris Kross Amsterdam x Maan x Tabita x Bizzey',
                'position' => 5,
                'last_week' => 8,
                'total_weeks' => 4,
                'youtube_id' => 'EYhLEHE1vfQ',
                'more_info' => 'https://www.top40.nl/kris-kross-amsterdam-x-maan-x-tabitha-x-bizzey/hij-is-van-mij-31749'
            ],
            [
                'id' => 6,
                'title' => 'Let you love me',
                'artist' => 'Mark Ronson feat: Miley Cyrus',
                'position' => 6,
                'last_week' => 4,
                'total_weeks' => 6,
                'youtube_id' => 'A9hcJgtnm6Q',
                'more_info' => 'https://www.top40.nl/mark-ronson-feat-miley-cyrus-1/nothing-breaks-like-a-heart-1-31687'
            ],
            [
                'id' => 7,
                'title' => 'Let you love me',
                'artist' => 'Rita Ora',
                'position' => 7,
                'last_week' => 5,
                'total_weeks' => 15,
                'youtube_id' => 'XCQK6LmhYqc',
                'more_info' => 'https://www.top40.nl/rita-ora-9/let-you-love-me-31361'
            ],
            [
                'id' => 8,
                'title' => 'David Guetta & Bebe Rexha & J Balvin',
                'artist' => 'Say My Name',
                'position' => 8,
                'last_week' => 7,
                'total_weeks' => 9,
                'youtube_id' => 'WXBHCQYxwr0',
                'more_info' => 'https://www.top40.nl/david-guetta-bebe-rexha-j-balvin-1/say-my-name-2-31490'
            ],
            [
                'id' => 9,
                'title' => 'Be alright',
                'artist' => 'Dean Lewis',
                'position' => 9,
                'last_week' => 11,
                'total_weeks' => 18,
                'youtube_id' => 'I0czvJ_jikg',
                'more_info' => 'https://www.top40.nl/dean-lewis-2/be-alright-2-31197'
            ],
            [
                'id' => 10,
                'title' => 'Promises',
                'artist' => 'Calvin Harris & Sam Smith',
                'position' => 10,
                'last_week' => 9,
                'total_weeks' => 21,
                'youtube_id' => 'kkLk2XWMBf8',
                'more_info' => 'https://www.top40.nl/calvin-harris-sam-smith-1/promises-1-31196'
            ]
        ]);

    }
}
