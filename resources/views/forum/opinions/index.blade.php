@extends ('layout')

@section ('content')

    <h1> << [{{ $topic->user->pseudo }}] {{ $topic->description }} >> </h1>

    @forelse ($opinions as $opinion)
        <h2> *{{ ($loop->index) + 1 }}* [{{ $opinion->user->pseudo }}] </h2>
        <h3> {{ $opinion->description }} </h3>
        @foreach ($opinion->comments as $comment)
        <h5> {{ $comment->pseudo }}: {{ $comment->pivot->comment }}, {{ $comment->pivot->points }}pts</h5>
        @endforeach
    @empty
        <div>Aucunes opiniond n'ont été trouvées >:C </div>
    @endforelse

@endsection

