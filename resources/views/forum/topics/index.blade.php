@extends ('layout')

@section ('content')
<h1> Liste des Topics avec comme thème : {{ $theme->name }}</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($topics as $topic)
        <tr>
            <td> {{ ($loop->index) + 1 }} </td>
            <td>
                {{ $topic->description }}
            </td>
            <td> 
                <a href="{{ route('forum.opinions',$topic->id) }}" class="btn btn-outline-secondary">{{ $topic->opinions->count() }}</a>
            </td>
        </tr>
    @empty
        <div>Aucun topic n'a été trouvé >:C </div>
    @endforelse
    </tbody>
</table>

@endsection
