<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Artwork;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $post1 = new Post();
        $post1->title = 'First post!';
        $post1->content = 'Welcome to the site! I am happy to have you reading and viewing my work.';
        $post1->artwork_id = Artwork::where('label', 'LIKE', 'APA-Logo')->pluck('id')->first();
        $post1->position = 'top-left';
        $post1->publish = true;
        $post1->save();

        $post2 = new Post();
        $post2->title = 'Second post!';
        $post2->content = 'Hello world! Join us\\nin becoming our best selves.';
        $post2->artwork()->associate(Artwork::where('label', 'LIKE', 'APA-Logo')->first());
        $post2->position = 'top-right';
        $post2->publish = true;
        $post2->save();
    }
}
