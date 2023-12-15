<?php

namespace App\Services;

use App\Models\Article;

class ArticleService {
    protected $model;

    public function __construct(Article $model) {
        $this->model = $model;
    }

    public function get_all() {
        return $this->model::query()->get()->all();
    }
}
