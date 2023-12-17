@extends('home.index')
@section('title', 'ls /etc [Santiago Calligari]')
@section('body')
    <div class="container bg-dark">
        <div class="row justify-content-center bg-dark">
            <div class="col-md-8 bg-dark">
                <div class="card">
                    <div class="text-white card-header">{{ __('Login') }}</div>

                    <div class="card-body bg-dark">

                        <form method="POST" class="bg-dark" action="{{ route('login') }}">
                            @csrf
                            <input style="background-color: rgb(40, 45, 50); color: gainsboro !important;" type="text"
                                name="name" placeholder="username" />
                            <input style="background-color: rgb(40, 45, 50); color: gainsboro !important;" type="password"
                                name="password" placeholder="password" />
                            <button type="submit">Login</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
