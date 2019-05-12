<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArtworksTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(EmotionsTableSeeder::class);
        $this->call(EmotionPostTableSeeder::class);
        $this->call(ArtworkTagTableSeeder::class);
    }
}
