<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Articles;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () 
    {
        return view('article.index')
            ->with('article', Articles::orderBy('updated_at', 'DESC')->get());
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {     
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . 
        $request->image->extension();
        $request->image->move(public_path('post-image'), $newImageName);
        
        Articles::create([
            'title' => $request->input('title'),
            'synopsis' => $request->input('title'),            
            'content' => $request->input('content'),
            'slug' => SlugService::createSlug(Articles::class, 'slug', $request->title),
            'image' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/articles');
    }

    public function edit($slug)
    {
        return view('article.edit')
            ->with('article', Articles::where('slug', $slug)->first());
    }

    public function update(ArticleRequest $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Articles::where('slug', $slug)
            ->update ([
                'title' => $request->input('title'),
                'synopsis' => $request->input('title'),            
                'content' => $request->input('content'),
                'slug' => SlugService::createSlug(Articles::class, 'slug', $request->title),
                'user_id' => auth()->user()->id  
            ]);

        return redirect('/articles');
    }

    public function destroy($slug)
    {
        $article = Articles::where('slug', $slug);
        $article->delete();

        return redirect('/articles');
    }
}
