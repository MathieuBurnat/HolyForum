<form action="{{ route('opinions.store') }}" method="post">
    @csrf
    <h6>Commentaire</h6>
    <textarea class="form-control" name="newcomm"></textarea>

    <h6>Points</h6>
    <input class="form-control" type="number" max="1" min="-1" name="points">

    <button class="btn btn-success">Envoyer</button>

    <input type="hidden" name="opinion" value="{{ $opinion->id }}">
</form>

