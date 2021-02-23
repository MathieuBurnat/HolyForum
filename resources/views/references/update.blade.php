@extends ('layout')

@section ('content')
    <form action="{{ route('references.update', $reference->id) }}" method="post">
        @method('PUT')
        
        @csrf
        <h3>Description</h3>
        <input type="text" class="form-control" name="description" placeholder="Description of the URL" value="{{$reference->description}}" required>

        <h3>URL</h3>
        <input type="url" class="form-control"  name="url" placeholder="Example : https://www.youtube.com/" value="{{$reference->url}}" required>
        
        <button class="m-1 btn btn-success">Mettre à jour</button>
        <a href="{{ url()->previous() }}" class="m-1 btn btn-danger">Annuler</a>
        
    </form>
@endsection
