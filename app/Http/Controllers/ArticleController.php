<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = \App\Models\Article::all();
        return view('articles.index', compact('articles'));
    }

    // public function logout()

    // {
    //     auth()->logout();
    //     return redirect('/');
    // }
}
