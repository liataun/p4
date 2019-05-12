<?php

use Illuminate\Database\Seeder;
use App\Emotion;
use App\Post;

class EmotionPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::All();

        foreach ($posts as $post)
        {
            //get random emotion
            $count = Emotion::get()->count();
            $emotion = Emotion::find(rand(1,$count));

            $post->emotions()->save($emotion);
        }
    }
}
