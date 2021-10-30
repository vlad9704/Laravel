<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/"><img style="width: 80px" src="{{ asset('img/logo.png') }}" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link {{ request()->route()->named('index') ? 'active' : '' }}" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->route()->named('posts.list') ? 'active' : '' }}" aria-current="page" href="{{ route('posts.list') }}">Heroes</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->route()->named('post.create') ? 'active' : '' }}" aria-current="page" href="{{ route('post.create') }}">Add hero</a></li>
            </ul>
        </div>
    </div>
</nav>
