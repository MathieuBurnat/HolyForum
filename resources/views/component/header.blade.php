<head>
    <meta charset="UTF-8">
    <title>Holy Forum</title>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">HolyForum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('themes.index') }}">Thèmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('references.index') }}">Références</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('roles.index') }}">Rôles</a>
            </li>
          </ul>
        </div>
      </nav>
    
</head>

