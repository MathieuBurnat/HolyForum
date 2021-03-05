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
          @if(Auth::User()->isAdmin())
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
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ url('divers') }}">Divers</a>
        </li>
      </ul>

    </div>

    <div class="collapse navbar-collapse navbar-right" id="navbarNavDropdown" style="position: absolute; right: 0px; padding:4em;">
      <!--a class="navbar-brand text-primary" href="{ route('login') }}">Login</a-->
      @if (auth::check())
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mon compte
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item " href="#"> <h6>Votre Rôle</h6></a>
                @switch(auth::User()->role->slug)
                @case("PROF")
                  <a class="dropdown-item text-primary" href="#"> Professeur </a>
                  @break
                @case("STUD")
                  <a class="dropdown-item text-secondary" href="#"> Étudient </a>
                  @break
                @case("ADMI")
                  <a class="dropdown-item text-warning" href="#"> Administrateur </a>
                  @break
                @endswitch
              <!--a class="dropdown-item" href="#">Informations</a-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"> <h6>Options</h6></a>
              <a class="dropdown-item text-danger" href="{{ route('logout') }}">Logout</a>
            </div>
          </li>
        </ul>
      @else
        <a class="navbar-brand text-primary" href="{{ route('login') }}">Login</a>
      @endif
      
    </div>



    @if (auth::check())

      <!--a class="navbar-brand text-primary" href="{ route('login') }}">Login</a-->
    @else
      <!--a class="navbar-brand text-danger" href="{ route('logout') }}">Logout</a-->
    @endif
  </nav>
</head>

