@extends('home')

@section('content')


    <div class="d-flex justify-content-center m-2">
       <a class="btn  btn-outline-primary btn-lg btn-block" href="http://localhost:8000/anime_characters">Go Back</a>
   </div>

   <h1>{{ $title}}</h1>
        <img src="/images/{{ $character->image }}" alt="{{ $character->name }}" />

   <h2>{{$character->name}}</h2>
   <ul class="list-group">
       <li class="list-group-item"><strong>Name:</strong>&nbsp;{{ $character->name}}</li>
       <li class="list-group-item"><strong>Genre:</strong>&nbsp;{{ $character->genre}}</li>
       <li class="list-group-item"><strong>Creator:</strong>&nbsp;{{ $character->creator}}</li>
       <li class="list-group-item"><strong>Anime:</strong>&nbsp;{{ $character->anime}}</li>
   </ul>

   <div class="mt-4">
    <p>{{$character->body}}</p>
  </div>
@stop


@section('sidebar')

    <h2>Other Characters</h2>

    <ul>
        @foreach($getall as $cat)
            <li><a href="#">{{ $cat->anime }}</a></li>
        @endforeach
    </ul>

@stop
