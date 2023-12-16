<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest {
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'file' => ['required', 'file', 'mimes:txt, md', 'max:10240'],
        ];
    }
}
