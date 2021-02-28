@extends ('layout')

@section ('content')
      <form class="w-50 mx-auto" action="{{ route('users.store') }}" method="post">
        @csrf
        <h2> Création d'un nouveau compte </h2>
        <div class="form-group">
          <label for="name">Nom</label>
          <input type="name" class="form-control" name="name" id="name" placeholder="Entrer votre nom" required>
        </div>
        <div class="form-group">
          <label for="last-name">Prénom</label>
          <input type="last-name" class="form-control" name="last-name" id="last-name" placeholder="Entrer votre prénom" required>
        </div>
        <div class="form-group">
          <label for="pseudo">Pseudo</label>
          <input type="pseudo" class="form-control" name="pseudo" id="pseudo" placeholder="Entrer votre pseudo" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse mail</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrer votre mail" required>
          <small id="emailHelp" class="form-text text-muted"> Sachez que nous n'utilisons aucunes de vos données à des fins Marketing. Notre  but premier est la sécurité de vos données. </small>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="entrer votre mot de passe" required>
        </div>
        <div class="form-group">
          <label for="password2">Répéter le mot de passe</label>
          <input type="password" class="form-control" name="password2" id="password2" placeholder="Tapez votre mot de passe à nouveau" required>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Je souhaite être informé des dernières nouvelles</label>
        </div>
        <button type="submit" class="btn btn-primary">S'enregistrer</button>
        <p class="font-weight-light p-3 mb-2 bg-light"> Vous avez déjà un compte ? Connectez-vous <a href="{{ route('login') }}">ici</a>
            !</p>
      </form>
@endsection