@extends ('layout')

@section ('content')
<h1> Liste des thèmes </h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Test</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($themes as $theme)
        <tr>
            <td> {{ ($loop->index) + 1 }} </td>
            <td>
                {{ $theme->name }}
            </td>
            <td> 
                [ {{ $theme->topics->count() }} ]
            </td>
        </tr>
    @empty
        <div>Aucunes références n'ont été trouvées >:C </div>
    @endforelse
    </tbody>
</table>

@endsection
