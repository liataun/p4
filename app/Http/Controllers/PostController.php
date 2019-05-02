<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        //ToDO Build form
        Log::info('Page stub -PostController.index- was accessed on: ' . date('Ymd'));

        return view('welcome');
    }

    public function list()
    {
        //ToDO Pull posts info from database
        Log::info('Page stub -PostController.list- was accessed on: ' . date('Ymd'));
        $posts = Post::all();

        foreach (explode('\\n', $posts[1]->content) as $part) {
            dump('Parts ' . $part);
        }

        dump('With e: ' . nl2br(e($posts[0]->content)));
        dump('Without e: ' . nl2br($posts[0]->content));

        return view('posts.list')->with(['posts' => $posts,]);
    }
}
