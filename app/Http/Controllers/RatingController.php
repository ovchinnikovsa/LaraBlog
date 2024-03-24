<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class RatingController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        // TODO: mb to do top rating articles
        // $articles = Article::orderBy('likes_count','desc')->get();
        return view('rating', ['articles' => $articles]);
    }
}
