<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->route()->named('post.index') ? 'active' : '' }}" href="{{ route('post.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->route()->named('post.create') ? 'active' : '' }}" href="{{ route('post.create') }}">Create post</a></li>
                <li class="nav-item">
                    @guest
                        <a class="nav-link" href="{{ url('/login') }}">Log in</a>
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    @endguest
                </li>
            </ul>
        </div>
    </div>
</nav>
