<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



    class CommentController extends Controller
    {
        public function store(Request $request, Article $article)
        {
            $request->validate([
                'content' => 'required|string',
            ]);
    
            $comment = new Comment();
            $comment->content = $request->input('content');
            $comment->user_id = auth()->id();
            $comment->article_id = $article->id;
            $comment->save();
    
            return Redirect::back()->with('success', 'Commentaire ajouté avec succès.');
        }
    }

