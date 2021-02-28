

@extends ('layout')

@section ('content')
        <form class="w-50 mx-auto" action="{{ route('connection') }}" method="post">
        @csrf
        <h2> Connection </h2>
        <div class="form-group">
            <label for="email">Adresse mail</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre mail" required>
          </div>
          <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="entrer votre mot de passe" required>
          </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <p class="font-weight-light p-3 mb-2 bg-light"> Vous n'avez pas de compte ? Enregistrez-vous <a href="{{ route('register') }}">ici</a>
            !</p>
      </form>

@endsection