<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return inertia('Articles/Index', ['articles' => $articles]);
    }


    public function show(Article $article)
    {
        $article->load('comments.user');
        return Inertia::render('Articles/Show', ['article' => $article]);
    }
}
