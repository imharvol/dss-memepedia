<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Evaluation;
use App\Models\Meme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluationController extends Controller
{
    public function store(Request $request)
    {
        $evaluation = new Evaluation();
        $evaluation->comment = trim($request->comment);
        $evaluation->rating = floatval($request->rating);

        $evaluationMeme = Meme::firstWhere('id', $request->memeId);
        $evaluation->meme()->associate($evaluationMeme);

        $evaluationAuthor = Auth::user();
        $evaluation->author()->associate($evaluationAuthor);

        $evaluation->save();

        return back();
    }

    public function delete(Request $request)
    {
        $evaluation = Meme::firstWhere('id', $request->id);
        $evaluation->delete();
        return back();
    }

    public function update(Request $request)
    {
        $evaluation = Evaluation::firstWhere('id', $request->id);
        $evaluation->comment = trim($request->comment);
        $evaluation->rating = floatval($request->rating);
        $evaluation->save();

        return back();
    }
}
