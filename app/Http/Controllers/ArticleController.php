<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::simplePaginate(2);

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $article = new Article();
        $article->fill($request->validated());
        $article->save();

        $request->session()->flash('message', 'Article was created successfully!');

        return redirect()
            ->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->fill($request->validated());
        $article->save();

        $request->session()->flash('message', 'Article was updated successfully!');

        return redirect()
            ->route('articles.index');
    }

    public function destroy( $id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
        }

        return redirect()->route('articles.index')
            ->with('message', 'Статья удалена');
    }
}
