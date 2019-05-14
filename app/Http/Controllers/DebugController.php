<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use App;
use App\Artwork;
use App\Emotion;
use App\Post;
use App\Tag;
use App\User;

class DebugController extends Controller
{
    /**
     * Stub playing with the idea of having users
     */
    public function debug()
    {
        $debug = [
            'Environment' => App::environment(),
        ];

        /*
        The following commented out line will print your MySQL credentials.
        Uncomment this line only if you're facing difficulties connecting to the
        database and you need to confirm your credentials. When you're done
        debugging, comment it back out so you don't accidentally leave it
        running on your production server, making your credentials public.
        */
        #$debug['MySQL connection config'] = config('database.connections.mysql');

        try {
            $databases = DB::select('SHOW DATABASES;');
            $debug['Database connection test'] = 'PASSED';
            $debug['Databases'] = array_column($databases, 'Database');

            $characters = DB::table('INFORMATION_SCHEMA.SCHEMATA')->select('DEFAULT_CHARACTER_SET_NAME', 'DEFAULT_COLLATION_NAME')->where('SCHEMA_NAME', 'p4')->get();
            $debug['Character set'] = $characters;
        } catch (Exception $e) {
            $debug['Database connection test'] = 'FAILED: ' . $e->getMessage();
        }

        $postEmotionUser = User::select('id')->where('email', '=', 'jill@harvard.edu')->first()->id;

        return view('debug')->with(['debug' => $debug, 'emote_user' => $postEmotionUser]);
    }
}
