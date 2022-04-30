<?php

use App\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Video::create([
            'title' => 'عزل فوم بالرياض',
            'description' => 'عزل فوم بالرياض عزل مائي عزل حراري عزل مضاد للامطار وتسربات المياه عزل معتمد من شركه الكهرباء وعزل حمامات ومطابخ التواصل واتس اب 0538069369 او على الخاص',
            'video' => 'الرياض.mp4'
        ]);
    }
}
