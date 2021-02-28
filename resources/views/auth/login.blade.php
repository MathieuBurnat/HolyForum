

@extends ('layout')

@section ('content')
    <form class="w-50 mx-auto">
        <h2> Welcome to the login section ! </h2>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre mail">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="entrer votre mot de passe">
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