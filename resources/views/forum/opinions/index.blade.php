@extends ('layout')

@section ('content')

    <h1> << [{{ $topic->user->pseudo }}] {{ $topic->description }} >> </h1>

    @forelse ($opinions as $opinion)
        <div class="card">
            <h4 class="card-header"> #{{ ($loop->index) + 1 }} {{ $opinion->user->pseudo }} </h4>
            <div class="card-body">
                <h5 class="card-title">{{ $opinion->description }}</h5>
                <a href="#" class="btn btn-primary">Répondre</a>
        </div>

        @foreach ($opinion->comments as $comment)
            <div class="card" style="margin-left: 1em">
                <h6 class="card-header"> {{ $comment->pseudo }} </h6>
                <div class="card-body">
                    <p class="card-text">{{ $comment->pivot->comment }} {{ $comment->pivot->points }}pts</p>
                </div>
            </div>
        @endforeach
    @empty
        <div>Aucunes opiniond n'ont été trouvées >:C </div>
    @endforelse



@endsection

