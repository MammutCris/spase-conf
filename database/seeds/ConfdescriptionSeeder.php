<?php

use Illuminate\Database\Seeder;

class ConfdescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('confdescriptions')->insert([
            'title_uk'  =>'Описання місця проведення',
            'text_uk'   =>'Тематика конференції присвячена широкому колу космічних досліджень, що поєднуються за наступною ознакою – ці дослідження ведуться (або тісно пов’язані з дослідженнями, які ведуться) з використанням космічних апаратів.',
        ]);
        DB::table('confdescriptions')->insert([
            'title_uk'  =>'Умови проживання',
            'text_uk'   =>'Тематика конференції присвячена широкому колу космічних досліджень, що поєднуються за наступною ознакою – ці дослідження ведуться (або тісно пов’язані з дослідженнями, які ведуться) з використанням космічних апаратів.',
        ]);
    }
}
