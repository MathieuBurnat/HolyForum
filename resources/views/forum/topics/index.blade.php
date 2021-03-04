@extends ('layout')

@section ('content')

<h1> Liste des Topics </h1>
<div class="p-2 mb-2 bg-info text-white" style="width: 5%; text-align: center; border-radius: 25px;"> {{ $theme->name }}</div>

@if (!$topics->isEmpty())
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($topics as $topic)
            <tr>
                <td> {{ ($loop->index) + 1 }} </td>
                <td>
                    {{ $topic->description }}
                </td>
                <td> 
                    <a href="{{ route('forum.opinions',$topic->id) }}" class="btn btn-outline-secondary">{{ $topic->opinions->count() }}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="p-3 mb-2 bg-light text-dark"> Aucuns topics n'existent actuellement. :'c </div>
@endif

<p>
    <button class="btn btn-outline-info m-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCard" aria-expanded="false" aria-controls="collapseExample">
        Nouveau Topic
    </button>
</p>


<div class="collapse" id="collapseCard">
    <div class="card card-body">
        @include("forum.topics.newTopic")
    </div>
</div>

@endsection
