@extends ('layout')

@section ('content')
<h1> Liste des thèmes </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse ($opinions as $opinion)
        <tr>
            <td> {{ ($loop->index) + 1 }} </td>
            <td>
                {{ $opinion->description }}
            </td>
            <td> 
                <a href="{ route('forum.topics',$opinion->id) }}" class="btn btn-outline-secondary">0</a>
            </td>
        </tr>
    @empty
        <div>Aucunes références n'ont été trouvées >:C </div>
    @endforelse
    </tbody>
</table>

@endsection
