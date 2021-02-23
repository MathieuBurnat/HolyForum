@extends ('layout')

@section ('content')
    <form action="{{ route('references.update', $reference->id) }}" method="post">
        @method('PUT')
        <div class="form-group">
            <h3 for="exampleFormControlInput1">Description</h3>
            <input type="text" class="form-control" name="description" placeholder="Description of the URL" value="{{$reference->description}}" required>
        </div>

        <div class="form-group">
            <h3 for="exampleFormControlInput1">URL</h3>
            <input type="text" class="form-control"  name="url" placeholder="Example : https://www.youtube.com/" value="{{$reference->url}}" required>
        </div>
        
        <button class="m-1 btn btn-success">Mettre à jour</button>
        <a href="{{ url()->previous() }}" class="m-1 btn btn-danger">Annuler</a>
        
    </form>
@endsection
