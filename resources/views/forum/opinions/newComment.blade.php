<form action="{ route('opinions.comment') }}" method="post">
    <div class="row">
        <label class="form-control col-2 text-right border-0">Commentaire</label>
        <textarea class="form-control col-10" name="newcomm"></textarea><br>
    </div>
    <div class="row">
        <label class="form-control col-2 text-right border-0">Points</label>
        <input class="form-control col-1" type="number" max="1" min="-1" name="points">
    </div>
    <div class="row">
        <div class="col-2"></div>
            <div class="col-2">
                <button class="btn btn-success btn-sm" type="submit">Envoyer</button>
            </div>
    </div>
    <input type="hidden" name="opinion" value="{{ $opinion->id }}">
</form>

