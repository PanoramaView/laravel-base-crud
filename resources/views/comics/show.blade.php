@extends('layout.default')

@section('page_title', 'Comics Details')


@section('content')

<h3>SHOW</h3>
<ul>
    <li>Title: {{$comic->title}}</li>
    <li>Description: {{$comic->description}}</li>
    <li>Thumbnail: {{$comic->thumb}}</li>
    <li>Price: {{$comic->price}}</li>
</ul>

@endsection
