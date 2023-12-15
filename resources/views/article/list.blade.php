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

            <li>
                <span class="dirlist"><span style="color:salmon">-rwxr-x-r-x </span><span style="color:seagreen">root
                        root</span></span>
                <span class="dirlist count" style="color:lemonchiffon">682&nbsp;</span>
                <span class="dirlist" style="color:mediumspringgreen">
                    25 Dec 2012
                    <a href="/articles/dont-mock-me.html">Don't Mock Me</a>
                </span>
            </li>

        </ul>

    </div>
@endsection
