<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class HomeController extends Controller
{
    
    public function index () 
    {
        return view('welcome')
            ->with('article', Articles::orderBy('updated_at', 'DESC')->get());
    }

    public function show ($slug)
    {
        return view('article.page')
            ->with('article', Articles::where('slug', $slug)->first());
    }
}
