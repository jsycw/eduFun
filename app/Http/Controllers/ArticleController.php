<?php 

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles()
    {
        $articles = Article::with('category', 'author')->get();
        // compact buat passing data compact('article')
        return view("main.home", ['article' => $articles]);
    }

    public function getPopularArticles()
    {
        $popular = Article::with('category', 'author')->paginate(3);
        return view('main.popular', ['article' => $popular]);
    }

    public function getArticleById($id)
    {
        $article = Article::with('category', 'author')->find($id);
        return view('main.articleDetail', ['article' => $article]);
    }
}
