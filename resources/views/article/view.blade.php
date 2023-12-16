@extends('home.index')
@section('title', 'cat ' . $title . ' | Santiago Calligari')
@section('body')
    <link href="{{ asset('assets/css/markdown.css') }}" rel="stylesheet">
    <div class="markdown_container">
        @markdown
            {!! $markdown_content !!}
        @endmarkdown
    </div>
@endsection
