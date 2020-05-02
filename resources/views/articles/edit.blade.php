
@extends('layouts.layout')
@section('head')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
@endsection
@section('content')

<div id="wrapper">
    <div id="page" class="container">
        <h1 class="hading has-text-weight-bold is-size-3">Edit Article</h1>

    <form action="/articles/{{$article->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="field">

            <label for="title" >Title</label>


            </div>
            <div class="control">
                <input type="text" class="input" name="title" id="title" value="{{$article->title}}" >


            </div>

            <div class="field">

                <label for="excerpt">Excerpt</label>


            </div>
            <div class="control">
                <textarea type="textare" class="textarea" name="excerpt" id="excerpt" value="" >{{$article->excerpt}}</textarea>

            </div>

            <div class="field">

                <label for="body">Body</label>
            </div>
            <div class="control">
                <textarea type="textarea" class="textarea" name="body" id="body" value="" > {{$article->body}}</textarea>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Edit the Article</button>
                </div>
            </div>

        </form>


    </div>
</div>


@endsection
