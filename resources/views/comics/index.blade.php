@extends('layout.default')

@section('page_title', 'List of Comics')


@section('content')

<a href="{{ route('comics.create') }}">Aggiungi comic</a>

<h3>INDEX</h3>
<table>
    <thead>
        <tr>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
        </tr>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>
                <a href="{{route('comics.show', $comic -> id)}}"> Dettagli </a>
            </td>

            <td>
                <a href="{{ route('comics.edit', ['comic' => $comic -> id]) }}"> Modifica comic </a>
            </td>

            @include('partials.components.deleteBtn', ["id" => $comic -> id])
        </tr>
        @endforeach
    </tbody>
</table>


@endsection
