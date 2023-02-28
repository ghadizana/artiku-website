<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Articles;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index (Request $request) 
    {
        if($request->search) {
            $article = Articles::where('articles', 'LIKE', "%$request->search%")->paginate(10);

            return view('article.index', [
                'data' => $article
            ]);
        };
        
        $article = Articles::paginate(10);
        return view('article.index', [
            'data' => $article
        ]);
    }

    public function create ()
    {
        return view('article.create');
    }

    public function store (ArticleRequest $request)
    {
        Articles::create ([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'content' => $request->content,
            'image' => $request->image
        ]);

        return redirect('/articles');
    }

    public function edit ($id)
    {
        $article = Articles::find($id);
        return view('article.edit', compact('task'));
    }

    public function update (ArticleRequest $request, $id)
    {
        $article = Articles::find($id);

        $article->update ([
            'title' => $request->title,
            'synopsis' => $request->synopsis,
            'content' => $request->content,
            'image' => $request->image
        ]);

        return redirect('/articles');
    }

    public function show ($id)
    {
        $article = Articles::find ($id);
        return view('article.page', [
            'data' => $article
        ]);
    }
}
