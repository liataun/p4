<?php

use Illuminate\Database\Seeder;
use App\Emotion;
use App\User;

class EmotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $emotion1 = new Emotion();
        $emotion1->name = 'joyful';
        $emotion1->user_id = User::where('email', '=', 'jill@harvard.edu')->pluck('id')->first();
        $emotion1->save();

        $emotion2 = new Emotion();
        $emotion2->name = 'angry';
        $emotion1->user_id = User::where('email', '=', 'jill@harvard.edu')->pluck('id')->first();
        $emotion2->save();

        $emotion3 = new Emotion();
        $emotion3->name = 'sad';
        $emotion1->user_id = User::where('email', '=', 'jill@harvard.edu')->pluck('id')->first();
        $emotion3->save();

        $emotion4 = new Emotion();
        $emotion4->name = 'supportive';
        $emotion1->user_id = User::where('email', '=', 'jamal@harvard.edu')->pluck('id')->first();
        $emotion4->save();
    }
}
