<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Models\Articles;

class HomeController extends Controller
{
    
    public function index () 
    {
        return view('welcome')
            ->with('article', Articles::orderBy('updated_at', 'DESC')->get());
    }

    public function about ()
    {
        return view('about');
    }

    public function show ($slug)
    {
        return view('article.page')
            ->with('article', Articles::where('slug', $slug)->first());
    }

    // public function search (Request $request)
    // {
    //     $search = $request->input('search');

    //     $article = Articles::query()
    //     ->where('title', 'LIKE', "%{$search}%")
    //     ->orWhere('content', 'LIKE', "{$search}")
    //     ->orWhere('synopsis', 'LIKE', "{$search}")
    //     ->get();

    //     return view('search', compact('article'));
    // }
}
