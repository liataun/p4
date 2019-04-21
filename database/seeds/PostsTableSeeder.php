<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new Post();

        $post->title = 'First post!';
        $post->content = 'Hello world!\nJoin us in becoming our best selves.';

        $post->save();
    }
}
