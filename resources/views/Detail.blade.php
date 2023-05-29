@extends('layouts.Master')

@section('title', 'Detail')

@section('content')


<div class="d-flex row justify-content-start" style="width:75%">
    <h4 style="background-color:#ffc107">Book Detail</h4>

    <p>Title : {{ $books->title }}</p>
    <p>Title : {{ $books->Category?->category }}</p>
    <p>Author : {{ $books->Detail?->author }}</p>
    <p>Publisher : {{ $books->Detail?->publisher }}</p>
    <p>Year : {{ $books->Detail?->year }}</p>
    <p>Description : </p>
    <p>{{ $books->Detail->description }}</p>

</div>


@endsection
