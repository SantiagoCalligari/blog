@extends('home.head')
@section('title', 'ls /etc [Santiago Calligari]')
</head>

<body class="home_page bg-dark">

    <nav class="navbar navbar-expand navbar-light bg-dark" style="padding-top: 0;">
        <div class="container-fluid" style=" padding-left: 0;">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-lg-0">
                    <li class="mb-1 nav-item"style="border-right: 2px solid gray">
                        <a class="px-5 pt-3 text-white nav-link active" aria-current="page" href="/">
                            <h6>/</h6>
                        </a>
                    </li>
                    <li class="mb-1 nav-item btn-primary" style="border-right: 2px solid gray;">
                        <a class="px-5 pt-3 text-white nav-link" aria-current="page" href="/articles">
                            <h6>/articles</h6>
                        </a>
                    </li>
                    <li class="mb-1 nav-item"style="border-right: 2px solid gray">
                        <a class="px-5 pt-3 text-white nav-link active" target="_blank"
                            href="https://github.com/SantiagoCalligari">
                            <h6>/code</h6>
                        </a>
                    </li>
                    @if (Auth::User())
                        <li class="mb-1 nav-item"style="border-right: 2px solid gray">
                            <a class="px-5 pt-3 text-white nav-link active" aria-current="page"
                                href="{{ route('article.store') }}">
                                <h6>./create.sh</h6>
                            </a>
                        </li>
                        <li class="mb-1 nav-item"style="border-right: 2px solid gray">
                            <a class="px-5 pt-3 text-white nav-link active" aria-current="page"
                                href="{{ route('logout') }}">
                                <h6>./logout.sh</h6>
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @yield('body')
</body>

</html>
