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
        $emotion1->user_id = User::select('id')->where('email', '=', 'jill@harvard.edu')->first()->id;
        $emotion1->save();

        $emotion2 = new Emotion();
        $emotion2->name = 'angry';
        $emotion2->user_id = User::select('id')->where('email', '=', 'jill@harvard.edu')->first()->id;
        $emotion2->save();

        $emotion3 = new Emotion();
        $emotion3->name = 'sad';
        $emotion3->user_id = User::select('id')->where('email', '=', 'jamal@harvard.edu')->first()->id;
        $emotion3->save();

        $emotion4 = new Emotion();
        $emotion4->name = 'supportive';
        $emotion4->user_id = User::select('id')->where('email', '=', 'jamal@harvard.edu')->first()->id;
        $emotion4->save();
    }
}
