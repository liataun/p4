<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Artwork;
use APp\Tag;

class ArtworkController extends Controller
{
    public function list(Request $request)
    {
        Log::info('Page -ArtworkController.list- was accessed on: ' . date('Ymd'));
        $art = Artwork::all();

        return view('art.list')->with([
            'art' => $art,
        ]);
    }
}
