<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="#">About</a>
          @if (Route::has('login'))
          <a class="nav-link" href="posts">All Post</a>
            <div class="nav nav-right ml-auto">
                @auth
                    <a class="nav-link" href="{{ route('home') }}">Dashboard</a>
                    <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endauth
            </div>
            @endif
        </nav>
      </div>
    </div>