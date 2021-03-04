@extends ('layout')

@section ('content')
    <h1> Bienvenue dans la page d'accueil ! :D </h1>
    @if (Auth::check())
        <p> Vous êtes connecté </p>

        <p> Vous êtes : {{ Auth::User()->role->name }} </p>
        <p> Admin ? : {{ Auth::User()->isAdmin() }} </p>
    @endif
@endsection
