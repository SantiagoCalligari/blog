@extends('home.index')
@section('title', 'ls /etc [Santiago Calligari]')
@section('body')
    <div id="logo_container">
        <img src="{{ asset('assets/img/crab.png') }}"></img>
    </div>
    <div style="margin-left:80px">

        <ul class="posts">
            <li>
                <span class="dirlist" style="color: violet">❯
                    <span style="color: #b5bd68">ls</span>
                    <span style="color: #b294bb">/etc</span><span style="color: gray"> |</span>
                    <span style="color: #b5bd68">more</span>
                </span>
            </li>

            @foreach ($articles as $article)
                <li>
                    <span class="dirlist"><span style="color:salmon">-rwxr-x-r-x </span><span style="color:seagreen">root
                            root</span></span>
                    <span class="dirlist count" style="color:lemonchiffon">{{ $article->size }}&nbsp;</span>
                    <span class="dirlist" style="color:mediumspringgreen">
                        {{ date('M d Y', strtotime($article->created_at)) }}
                        <a href="{{ route('article.view', $article->id) }}">{{ $article->name }}</a>
                    </span>
                </li>
            @endforeach

        </ul>

    </div>
@endsection
