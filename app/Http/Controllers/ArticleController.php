<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //render a list of resouces
    public function index(){

        return view('articles.index' , ['articles' => Article::latest()->get()]);

    }
    //show a single resouce
    public function show($id){

      $article = Article::find($id);

      return view('articles.show', ['article' => $article] );

    }
    //show a view to create a resource
    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        //presist the new resouce

       $article = new Article();

       $article->title = request('title');
       $article->excerpt = request('excerpt');
       $article->body = request('body');

       $article->save();

       return redirect('/articles');
    }

    //show a view to edit a resource
    public function edit()
    {
    }

    public function update()
    {
        # code...
        //presist the edited the resouce
    }

    public function destroy()
    {
        //dpresist and delete
    }




}
