<?php

use Illuminate\Database\Seeder;
use App\Artwork;

class ArtworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $artwork1 = new Artwork();
        $artwork1->label = 'APA-Logo';
        $artwork1->path = '/Images/Artwork/APA-Logo.png';
        $artwork1->alt_text = 'A logo for an APA Citation website';
        $artwork1->link = 'http://p3.twitchell.me/';
        $artwork1->save();
    }
}
