@extends ('layout')

@section ('content')
    <div class="card">
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <h1> "{{ $topic->description }}" </h1>
            <footer class="blockquote-footer p-2">Créé par <cite title="Source Title"> {{ $topic->user->pseudo }} </cite></footer>
          </blockquote>
        </div>
      </div>

    @forelse ($opinions as $opinion)
        <div class="card">
            <h5 class="card-header"> {{ $opinion->user->pseudo }} </h5>
            <div class="card-body">
            <h6 class="card-title">{{ $opinion->description }}</h6>
            <p>
                <button class="btn btn-outline-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCard{{ ($loop->index) + 1 }}" aria-expanded="false" aria-controls="collapseExample">
                    Répondre
                </button>
            </p>
            <div class="collapse" id="collapseCard{{ ($loop->index) + 1 }}">
                <div class="card card-body">
                    @include('forum.opinions.newComment')
                </div>
            </div>
        </div>

        @foreach ($opinion->comments as $comment)
            <div class="card m-2">
                <h6 class="card-header"> #{{ ($loop->index) + 1 }} {{ $comment->pseudo }} </h6>
                <div class="card-body">
                    <p class="card-text">{{ $comment->pivot->comment }} {{ $comment->pivot->points }}pts</p>
                </div>
            </div>
        @endforeach
    @empty
        <div>Aucunes opinions n'ont été trouvées >:C </div>
    @endforelse
@endsection

