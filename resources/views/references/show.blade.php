@extends ('layout')

@section ('content')

<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Description</th>
        <th scope="col">URL</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>{{ $reference->description }}</td>
        <td>{{ $reference->url }}</td>
        </tr>
    </tbody>
</table>

<form action="{{ route('references.destroy', $reference->id) }}" method="post">
    @method('DELETE')
    @csrf
   
    <a href="{{ route('references.edit',$reference->id) }}" class="m-1 btn btn-primary">Modifier</a>
    <button class="m-1 btn btn-danger">Supprimer </button>
</form>

@endsection
