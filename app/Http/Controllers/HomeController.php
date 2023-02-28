<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Http\Requests\ArticleRequest;


class HomeController extends Controller
{
    public function index (Request $request) 
    {
        if($request->search) {
            $article = Articles::where('article', 'LIKE', "%$request->search%")->paginate(10);

            return view('welcome', [
                'data' => $article
            ]);
        };
        
        $article = Articles::paginate(10);
        return view('welcome', [
            'data' => $article
        ]);
    }

}
