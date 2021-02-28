

@extends ('layout')

@section ('content')
    <form class="w-50 mx-auto">
        <h2> Welcome to the login section ! </h2>
        <div class="form-group">
          <label for="exampleInputEmail1">Adresse mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre mail">
          <small id="emailHelp" class="form-text text-muted"> Sachez que nous n'utilisons aucunes de vos données à des fins Marketing. Notre  but premier est la sécurité de vos données. </small>
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
      </form>
@endsection