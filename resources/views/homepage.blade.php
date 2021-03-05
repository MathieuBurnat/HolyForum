@extends ('layout')

@section ('content')
    <h1> Bienvenue dans la page d'accueil ! </h1>
    @if (!Auth::check())
        <div class="p-3 mb-2 bg-light text-dark">  <cite title="Source Title"> PSST </cite> Vous n'êtes pas connecté. Vous pouvez le faire <a href="{{ route('login') }}">ici</a> ou cliquer sur le bouton <span class="text-primary"> Login</span>, en haut à droite ! </div>
    @endif
@endsection
