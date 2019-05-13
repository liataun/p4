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
    public function index(Request $request)
    {
        Log::info('Page -PostController.index- was accessed on: ' . date('Ymd'));

        $request->session()->forget('alert');

        return view('welcome');
    }

    public function list(Request $request)
    {
        Log::info('Page -PostController.list- was accessed on: ' . date('Ymd'));
        $posts = Post::where('publish', '=', true)->get();

        $collection = collect([]);
        foreach ($posts as $post) {
            $collection->put($post->id, explode('\n', $post['content']));
        }

        return view('posts.list')->with([
            'posts' => $posts,
            'text' => $collection,
            'alert' => $request->session()->get('alert'),
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
            'alert' => 'Your post has been added!',
        ]);
    }

    public function updateShow($id)
    {
        Log::info('Page -PostController.updateShow- was accessed on: ' . date('Ymd'));

        $images = Artwork::select('id', 'label')->orderBy('label', 'asc')->get();
        $post = Post::find($id);

        return view('posts.update')->with([
            'art' => $images,
            'post' => $post,
        ]);
    }

    public function update(Request $request, $id)
    {
        Log::info('Page -PostController.update- was accessed on: ' . date('Ymd'));

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'artwork' => 'required|exists:artworks,id',
        ]);

        $post1 = Post::find($id);
        $post1->title = $request->get('title');
        $post1->content = $request->get('content');
        $post1->artwork_id = $request->get('artwork');
        //$post1->position = 'top-left';
        //$post1->publish = true;
        $post1->save();

        return redirect('posts')->with([
            'alert' => 'Post ID: ' . $id . ' has been updated!',
        ]);
    }

    public function deleteShow(Request $request, $id)
    {
        Log::info('Page -PostController.deleteShow- was accessed on: ' . date('Ymd'));

        $post = Post::find($id);

        return view('posts.delete')->with([
            'post' => $post,
            'alert' => 'Deletion is not reversable!',
        ]);
    }

    public function delete(Request $request, $id)
    {
        Log::info('Page -PostController.delete- was accessed on: ' . date('Ymd'));
        dump('ToDo delete' . $id);

        $post = Post::find($id);
        $post->emotions()->detach();
        $post->delete();

        return redirect('/posts/')->with([
            'id' => $id,
            'alert' => 'Post ' . $post->title . ' was Deleted.',
        ]);
    }
}
