<form action="{{ route('topics.store') }}" method="post">
    @csrf
    <div class="form-floating mb-3">
        <input type="name" name="name" class="form-control" id="floatingInput">
        <label for="floatingInput">Mettez ici le nom de votre topic</label>
    </div>
    <button class="btn btn-success mt-1">Envoyer</button>

    <input type="hidden" name="theme" value="{{ $theme->id }}">
</form>

