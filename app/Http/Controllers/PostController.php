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
        $splitPosts = collect([]);

        foreach ($posts as $post) {
//            dd($post['content']);

            $splitPosts->push([
                $post['id'] => explode('\\n', $post['content'])
                ]);
        }

        return view('posts.list')->with(['posts' => $posts, 'text' => $splitPosts]);
    }

    public function insertShow()
    {
        Log::info('Page stub -PostController.insertShow- was accessed on: ' . date('Ymd'));

        return view('posts.insert')->with(['message' => 'Trying to see if it is working.',]);
    }

    public function insert(Request $request)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.insert- was accessed on: ' . date('Ymd'));
        dump('ToDo insert' . $id);
    }

    public function updateShow($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.updateShow- was accessed on: ' . date('Ymd'));
        dump('ToDo updateShow' . $id);
    }

    public function update($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.update- was accessed on: ' . date('Ymd'));
        dump('ToDo update' . $id);
    }

    public function deleteShow($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.deleteShow- was accessed on: ' . date('Ymd'));
        dump('ToDo deleteShow' . $id);
    }

    public function deleteConfirm($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.deleteConfirm- was accessed on: ' . date('Ymd'));
        dump('ToDo deleteConfirm' . $id);
    }

    public function delete($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.delete- was accessed on: ' . date('Ymd'));
        dump('ToDo delete' . $id);
    }
}
