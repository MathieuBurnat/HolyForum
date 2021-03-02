@extends ('layout')

@section ('content')
<h1> Liste des Topics </h1>

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
                <a href="{ route('topics.show',$topic->id) }}" class="btn btn-outline-secondary">{ $topics->opinions->count() }}</a>
            </td>
        </tr>
    @empty
        <div>Aucunes références n'ont été trouvées >:C </div>
    @endforelse
    </tbody>
</table>

@endsection
