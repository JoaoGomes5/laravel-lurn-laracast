<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //render a list of resouces
    //show a single resouce
    protected function validateArticle()
    {


        return request()->validate([

            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'

            ]);

        }

     public function index(){

         return view('articles.index' , ['articles' => Article::latest()->get()]);

     }

    public function show(Article $article)
    {
         return view('articles.show', ['article' => $article] );
    }
    //show a view to create a resource

    public function create()
    {
        return view('articles.create');
    }

    public function store(Article $article)
    {
        //presist the new resouce
        $article->create($this->validateArticle());

       return redirect(route('articles.index'));
    }

    //show a view to edit a resource
    public function edit(Article $article)
    {


        return view('articles.edit' , ['article' => $article]);
    }

    public function update(Article $article)
    {
        # code...
        //presist the edited the resouce

        $article->update($this->validateArticle());


        return redirect($article->path());

    }

    public function destroy(Article $article)
    {
        //dpresist and delete


    }




}
