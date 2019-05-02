<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $post2 = new Post();

        $post2->title = 'First post!';
        $post2->content = '1\n2\r3\n\r4\\n5\\r6\\n\\r7/n8/r9/n/r0//n11//r12//n//r13';

        $post2->save();

        $post1 = new Post();

        $post1->title = 'First post!';
        $post1->content = 'Hello world!<br>Join us\\nin becoming<br />our best selves.';

        $post1->save();
    }
}
