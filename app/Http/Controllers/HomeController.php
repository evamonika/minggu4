<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAll(){
        $article = Article::all();
        return view('home',['article'=> $article]);
    }

    public function getById($id){
        $article = Article::find($id);
        return view('article', ['article'=> $article, 'id' => $id]);
    }
}
