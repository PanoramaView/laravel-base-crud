@extends('layout.default')

@section('page_title', 'List of Comics')


@section('content')

<a href="{{ route('comics.create') }}">Aggiungi comic...</a>
@dump('comics')
<h3>INDEX</h3>
<table>
    <thead>
        <tr>
            <tr>
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
                <td>{{$comic->title}}</td>
                <td>{{$comic->description}}</td>
                <td>{{$comic->thumb}}</td>
                <td>{{$comic->price}}</td>
                <td><a href="{{route('comics.show', $user->id)}}"></a></td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
