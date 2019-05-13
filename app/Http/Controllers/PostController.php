<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Artwork;

class PostController extends Controller
{
    public function index()
    {
        Log::info('Page -PostController.index- was accessed on: ' . date('Ymd'));

        return view('welcome');
    }

    public function list(Request $request)
    {
        Log::info('Page -PostController.list- was accessed on: ' . date('Ymd'));
        $posts = Post::where('publish', '=', true)->get();

        $collection = collect([]);
        foreach($posts as $post) {
            $collection->put($post->id, explode('\n', $post['content']));
            //dump('with dump=> '.$post['content']);
        }

        return view('posts.list')->with([
            'posts' => $posts,
            'text' => $collection,
            'alert' => $request->session()->get('alert') ?? '',
        ]);
    }

    public function insertShow()
    {
        Log::info('Page -PostController.insertShow- was accessed on: ' . date('Ymd'));

        $images = Artwork::select('id', 'label')->orderBy('label', 'asc')->get();

        return view('posts.insert')->with([
            'art' => $images,
        ]);
    }

    public function insert(Request $request)
    {
        Log::info('Page -PostController.insert- was accessed on: ' . date('Ymd'));

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'artwork' => 'required|exists:artworks,id',
        ]);

        $post1 = new Post();
        $post1->title = $request->get('title');
        $post1->content = $request->get('content');
        $post1->artwork_id = $request->get('artwork');
        $post1->position = 'top-left';
        $post1->publish = true;
        $post1->save();

        return redirect('posts')->with([
            'alert' => 'You post has been added!',
        ]);
    }

    public function updateShow($id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.updateShow- was accessed on: ' . date('Ymd'));
        dump('ToDo updateShow' . $id);
    }

    public function update(Request $request, $id)
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

    public function deleteConfirm(Request $request, $id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.deleteConfirm- was accessed on: ' . date('Ymd'));
        dump('ToDo deleteConfirm' . $id);
    }

    public function delete(Request $request, $id)
    {
        //ToDO Build form
        Log::info('Page stub -PostController.delete- was accessed on: ' . date('Ymd'));
        dump('ToDo delete' . $id);
    }
}
