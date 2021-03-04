<head>
  <meta charset="UTF-8">
  <title>Holy Forum</title>

  <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
      
    <a class="navbar-brand" href="/">HolyForum</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        @if (Auth::check())
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('forum.themes') }}">Forum</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('themes.index') }}">Gestion des Thèmes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('references.index') }}">Gestion des Références</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">Gestion des Rôles</a>
          </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="#">Divers</a>
        </li>
      </ul>
    </div>

    @if (!auth::check())
      <a class="navbar-brand text-primary" href="{{ route('login') }}">Login</a>
    @else
      <a class="navbar-brand text-danger" href="{{ route('logout') }}">Logout</a>
    @endif
  </nav>
</head>

