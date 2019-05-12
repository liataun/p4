<?php

use Illuminate\Database\Seeder;
use App\Artwork;
use APp\Tag;

class ArtworkTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artworks = Artwork::All();

        foreach ($artworks as $artwork)
        {
            //get random emotion
            $count = Tag::get()->count();
            $tag = Tag::find(rand(1,$count));

            $artwork->tags()->save($tag);
        }
    }
}
