<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('img/logo/MB.png') }}" class="logo"
        alt="Mai Boutique Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        @auth
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/search">Search</a>
          </li>
          @if (!Auth::user()->is_admin)
            <li class="nav-item">
              <a class="nav-link" href="/view-cart">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/history">History</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
        @endauth
      </ul>
      <ul class="navbar-nav">
        @auth
          @if (Auth::user()->is_admin)
            <li class="nav-item me-3">
              <a class="text-decoration-none" href="/add-item"><button class="btn btn-secondary">Add
                  Item</button></a>
            </li>
          @endif
          <li class="nav-item me-3">
            <form action="/sign-out" method="get">
              @csrf
              <button class="btn btn-secondary" type="submit">Sign Out</button>
            </form>
          </li>
        @else
          <li class="nav-item me-3">
            <a href="/sign-in"><button class="btn btn-dark sign-in-up">Sign In</button></a>
          </li>
          <li class="nav-item me-3">
            <a href="/sign-up"><button class="btn btn-dark sign-in-up">Sign Up</button></a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
