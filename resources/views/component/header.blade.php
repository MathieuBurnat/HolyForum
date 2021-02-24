<head>
  <meta charset="UTF-8">
  <title>Holy Forum</title>

  <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
      
    <a class="navbar-brand" href="/">HolyForum</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('themes.index') }}">Gestion des Thèmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('references.index') }}">Gestion des Références</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('roles.index') }}">Gestion des Rôles</a>
        </li>
      </ul>
    </div>

    <a class="navbar-brand text-primary" href="{{ route('auth.login') }}">Login</a>
  </nav>
</head>

