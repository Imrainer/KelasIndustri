
@extends('Navbar')

@section('container')
    <article>
    <h2> {{ $post ["title"]}} </h2> 
    <h5 >By: {{ $post ["author"]}} </h5>
    <p> {{ $post ["body"]}}</p>
    </article>
    

    <a href = "/tes_Blog">Back to Posts</a>
@endsection