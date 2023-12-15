@extends('home.head')
@section('title', 'ls /etc [Santiago Calligari]')
</head>

<body class="home_page">
    <ul id="navbar">
        <li><a href="/">/</a></li>
        <li><a href="/articles.html">/articles</a></li>
        <li><a href="/code.html">/code</a></li>
        <li><a href="{{ route('article.store') }}">./create</a></li>
    </ul>
    <br style="clear:both">
    @yield('body')
</body>

</html>
