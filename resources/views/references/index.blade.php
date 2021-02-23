@extends ('layout')

@section ('content')
    <h1> Références 0:') </h1>

    <table style="width: 50%">
        <thead>
            <tr class="gradient">
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($references as $reference)
                <tr>
                    <td>
                        {{ $reference->description }}
                    </td>
                    <td class="col-icons" class="w-100"  style="text-align: right;">
                        <a href="{{ $reference->url }}"><i class="fas fa-link"></i></a>
                        <a href="{{ route('references.show', $reference->id) }}"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('references.edit', $reference->id) }}"><i class="fas fa-edit"></i></a>
                    </th>
                </tr>
            @empty
                <div>Aucunes références n'ont été trouvées >:C </div>
            @endforelse
        </tbody>
    </table>
    <a href="{{ route('references.create') }}" class="m-1 btn btn-success">Créer une nouvelle référence</a>
@endsection

<style>
tr:hover > .col-icons {
    opacity: 1;
}

tr:hover {
    background-color: #f1f1f1;
}

.col-icons {
    opacity: 0;
}

.gradient {
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 7%, rgba(0,212,255,1) 100%);
    color: white;
}
</style>