@extends ('layout')

@section ('content')
<form action="{{ route('references.store') }}" method="post">
    @csrf
    <h3>Description</h3>
    <input type="text" class="form-control" name="description" placeholder="Description of the URL" required>

    <h3>URL</h3>
    <input type="url" class="form-control"  name="url" placeholder="Example : https://www.youtube.com/" required>
    
    <button class="m-1 btn btn-success">Créer</button>
    <a href="{{ url()->previous() }}" class="m-1 btn btn-danger">Annuler</a>
    
</form>
@endsection
