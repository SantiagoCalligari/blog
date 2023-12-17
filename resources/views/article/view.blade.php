@extends('home.index')
@section('title', 'cat ' . $title . ' | Santiago Calligari')
@section('body')
    <link href="{{ asset('assets/css/markdown.css') }}" rel="stylesheet">
    <h2 class="pt-4 text-center text-light"> {{ $title }} </h2>
    <div class="text-light bg-dark" style="padding: 2% 25% 0 25% ">
        <x-markdown :highlight-code="true">
            {!! $markdown_content !!}
        </x-markdown>
    </div>
@endsection
