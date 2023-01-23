@extends('Navbar')

@section('container')
@foreach ($posts as $post)
    <article class="mb-5">
   <h2 class="ms-5 mt-5">
    <a href="tes_Blog/{{$post ["slug"]}}" class="text-decoration-none"> {{ $post ["title"] }}  </a> </h2>
    <h5 class="ms-5 ">By: {{ $post ["author"]}} </h5>
    <p class="ms-5">{{$post ["body"]}}</p>
    </article>
@endforeach

@endsection