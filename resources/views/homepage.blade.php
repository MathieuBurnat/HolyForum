@extends ('layout')

@section ('content')

    <div class="jumbotron">
        <h1 class="display-4">Bienvenue !</h1>
        <p class="lead"> Soyez mes ambles hôtes sur HolyForum  </p>
        <hr class="my-4">
        <p> Holy Forum est un petit projet créé pour mes cours de Laravel. Son but est l'amélioration de mes compétences. </p>
        
        <a href="{{ url('divers') }}" class="m-3 btn btn-dark btn-lg btn-block"> Lire d'avantage</a>
    </div>

    @if (!Auth::check())
        <div class="p-3 mb-2 bg-light text-dark"> <cite title="Source Title"> PSST </cite> Vous n'êtes pas connecté. Vous pouvez le faire <a href="{{ route('login') }}">ici</a> ou cliquer sur le bouton <span class="text-primary"> Login</span>, en haut à droite ! </div>
    @endif
@endsection
