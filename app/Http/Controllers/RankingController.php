<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RankingController extends Controller
{
    public function show(Request $request)
    {
        $memes = null;
        $now = Carbon::now();

        if ($request->r == 'week') {
            $memes = Meme::where('created_at', '>=', $now->subDays(7))->get();
        } else if ($request->r == 'month') {
            $memes = Meme::where('created_at', '>=', $now->subMonth())->get();
        } else if ($request->r == 'year') {
            $memes = Meme::where('created_at', '>=', $now->subYear())->get();
        } else {
            $request->r = 'all';
            $memes = Meme::all();
        }

        $memes = $memes->sort(function ($m1, $m2) {
            return count($m1->likes) < count($m2->likes);
        });

        $totalLength = count($memes);

        $page = (int)$request->p ?? 1;
        $limit = (int)$request->l ?? 10;
        if ($limit <= 0) $limit = 10;
        if ($limit > 50) $limit = 50;
        $memes = $memes->forPage($page, $limit);

        return view('ranking', ['memes' => $memes, 'limit' => $limit, 'page' => $page, 'totalLength' => $totalLength, 'range' => $request->r]);
    }
}
