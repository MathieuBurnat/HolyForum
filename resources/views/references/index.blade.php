@extends ('layout')

@section ('content')
    <h1> Références 0:')  </h1> <span class="fas fa-eye"></span>


    <div class="row">
      
        @forelse ($references as $reference)
            <div class="col">Name : {{ $reference->description }} </div>
            <div class="col">URL : {{ $reference->url }} </div>
            <div class="w-100"></div>
        @empty
            <div>Aucunes références ont été trouvées >:C </div>
        @endforelse
    </div>

    @forelse ($references as $reference)
        <tr>
            <th scope="col" class="col-icons col-fit-content">
                <a href="$reference->url" target="_blank"><i class="fas fa-link"></i></a>
                <a href="?controller=reference&action=show&id=$reference->id"><i class="fas fa-eye"></i></a>
                <a href="?controller=reference&action=edit&id=$reference->id"><i class="fas fa-edit"></i></a>
            </th>
            <td>
                {{ $reference->description }}
            </td>
        </tr>
    @empty
        <div>Aucunes références ont été trouvées >:C </div>
    @endforelse


        <!--div class="row" data-id="{{$reference->id}}">
            <div class="col-2 text-right">
                <div id="divIcons{{$reference->id}}" class="d-none">
                    <a class="blacklink m-2" href="{{ $reference->url }}"><i class="fas fa-eye"></i></a>
                    <a class="blacklink m-2" href="{{ route('references.show',$reference->id) }}"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>
            <div class="col-10 text-left">
                {{ $reference->description }}
            </div>
        </div -->
    
    <a href="{{ route('references.create') }}" class="btn btn-primary">Ajouter</a>
@endsection
