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
        $posts = Post::where('publish', '=', true)->get();

        foreach (explode('\\n', $posts[1]->content) as $part) {
            dump($part);
        }

        return view('posts.list')->with(['posts' => $posts,]);
    }

    public function insert($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.insert- was accessed on: ' . date('Ymd'));
        dump('ToDo insert' . $id);
    }

    public function update($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.update- was accessed on: ' . date('Ymd'));
        dump('ToDo update' . $id);
    }

    public function delete($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.delete- was accessed on: ' . date('Ymd'));
        dump('ToDo delete' . $id);
    }
}
