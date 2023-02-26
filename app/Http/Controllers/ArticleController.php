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
