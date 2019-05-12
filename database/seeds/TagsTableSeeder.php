<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $tag1 = new Tag();
        $tag1->name = 'logo';
        $tag1->save();
    }
}
