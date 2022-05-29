<?php

namespace App\Http\Controllers;

use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function delete(Request $request)
    {
        $tag = Tag::firstWhere('id', $request->id);
        $tag->delete();
        return back();
    }
}
