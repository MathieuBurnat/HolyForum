@extends ('layout')

@section ('content')
    <h1> Références 0:') </h1>

    <table class="w-100">
        <thead>
            <tr>
                <th class="blue-gradient-rgba">Description</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($references as $reference)
                <tr>
                    <td class="w-25">
                        {{ $reference->description }}
                    </td>
                    <td>
                        <a href="$reference->url" target="_blank"><i class="fas fa-link"></i></a>
                        <a href="?controller=reference&action=show&id=$reference->id"><i class="fas fa-eye"></i></a>
                        <a href="?controller=reference&action=edit&id=$reference->id"><i class="fas fa-edit"></i></a>
                    </th>
                </tr>
            @empty
                <div>Aucunes références ont été trouvées >:C </div>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('references.create') }}" class="btn btn-primary">Ajouter</a>
@endsection
