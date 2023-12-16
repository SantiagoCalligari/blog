<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="name" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <button type="submit">Login</button>
    </form>

</div>
