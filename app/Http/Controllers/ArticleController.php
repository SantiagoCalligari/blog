<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller {
    private Article $model;

    public function __construct(Article $model) {
        $this->model = $model;
    }

    public function list() {
        $articles = $this->model->query()->get()->all();

        return view('article.list', compact('articles'));
    }

    public function form() {

        return view('article.store');
    }

    public function destroy($id) {
        $article = $this->model->query()->find($id);
        Storage::disk('markdown')->delete($article->path);
        $article->delete();

        return redirect('/');

    }

    public function store(ArticleRequest $request) {
        $markdownContent = file_get_contents($request->file('file')->path());
        $markdownTitle = $request->file('file')->getClientOriginalName();
        Storage::disk('markdown')->put($markdownTitle, $markdownContent);
        $title = pathinfo($markdownTitle, PATHINFO_FILENAME);
        $file = new $this->model();
        $file->name = $title;
        $file->path = $markdownTitle;
        $file->size = $request->file('file')->getSize();
        $file->save();

        return redirect()->route('article.list');
    }

    public function view($id) {
        $article = $this->model->query()->find($id);
        $markdown_content = Storage::disk('markdown')->get($article->path);
        $title = $article->name;

        return view('article.view', compact('markdown_content', 'title'));

    }
}
