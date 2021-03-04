@extends ('layout')

@section ('content')
    <h1> Liste des thèmes </h1>

    @if (!$themes->isEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($themes as $theme)
                    <tr>
                        <td> {{ ($loop->index) + 1 }} </td>
                        <td>
                            {{ $theme->name }}
                        </td>
                        <td> 
                            <a href="{{ route('forum.topics',$theme->id) }}" class="btn btn-outline-secondary">{{ $theme->topics->count() }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="p-3 mb-2 bg-light text-dark"> Aucuns thèmes n'existent actuellement. :'c </div>
    @endif
@endsection
