<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests;
use Illuminate\HttpResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class ArticlesController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['only' => 'create']);
    }


    public function index()
    {

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index')->with('articles', $articles);
    }

    public function show(Article $article){

        // Find the Article with the id OR just fail -> better way than bellow
        //$article = Article::findOrFail($id);

        // *** IMPORTANT *** after updating the route Service provider, we no longer need to fetch the id



        //Typical way to do
//        if(is_null($article)){
//            abort(404);
//        }

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){

        // Si pas d'utilisation du make:request (rapidité)
        //$this->validate($request, ['title' => 'required', 'body' => 'required']);

        // validation: Laravel detect the Request object, it continues only if this step is validated

        $article = new Article($request->all());

        Auth::user()->articles()->save($article);


        //Article::create($request->all());

        return redirect('articles');


    }

    public function edit(Article $article){
        //$article = Article::findOrFail($id);
        // *** IMPORTANT *** after updating the route Service provider, we no longer need to fetch the id


        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, ArticleRequest $request){
        //$article = Article::findOrFail($id);
        // *** IMPORTANT *** after updating the route Service provider, we no longer need to fetch the id


        $article->update($request->all());

        return redirect('articles');

    }



    // Destroy method
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');

    }



}
