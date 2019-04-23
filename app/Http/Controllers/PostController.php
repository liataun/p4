<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

        return view('posts.list');
    }
}
