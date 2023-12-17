@extends('home.index')
@section('title', 'ls /etc [Santiago Calligari]')
@section('body')
    <div id="logo_container">
        <img src="{{ asset('assets/img/crab.png') }}"></img>
    </div>
    <div style="margin-left:2%">

        <script src="https://unpkg.com/feather-icons"></script>
        <ul class="posts">
            <li class="py-2">
                <span class="h5" style="color: violet">❯
                    <span class="h5"style="color: #b5bd68">ls</span>
                    <span class="h5"style="color: #b294bb">/etc</span>
                    <span class="h5"style="color: gray"> |</span>
                    <span class="h5"style="color: #b5bd68">more</span>
                </span>
            </li>

            <div class="ms-3">
                @foreach ($articles as $article)
                    <li>
                        <span class="dirlist">
                            <span style="color:salmon">-rwxr-x-r-x </span>
                            <span style="color:seagreen">root root</span>
                        </span>
                        <span class="dirlist count" style="color:lemonchiffon">{{ $article->size }}&nbsp;</span>
                        <span class="dirlist" style="color:mediumspringgreen">
                            {{ date('M d Y', strtotime($article->created_at)) }}
                            <a href="{{ route('article.view', $article->id) }}">{{ $article->name }}</a>
                            @if (Auth::User())
                                <a href="{{ route('article.destroy', $article->id) }}" style="color:red; ">
                                    <i data-feather="trash" style="height:10px; width:10px"></i>
                                </a>
                            @endif
                        </span>
                    </li>
                @endforeach
            </div>

            <script>
                feather.replace();
            </script>
        </ul>

    </div>
    <a href="{{ route('login') }}" class="login">Login</a>
@endsection
