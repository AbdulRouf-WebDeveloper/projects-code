@extends('home')

@section('content')

<h1>{{ $title }}</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-dark table-striped table-image">
            <thead>
                <tr>
                <th scope="col"></th>
                <th scope="col">Character</th>
                <th scope="col">Anime</th>
                <th scope="col">Author</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                @foreach($characters as $character)
                    <td><img class="img-fluid" src="/images/{{ $character->image }}" alt="{{ $character->name }}" /> </td>
                    <td><a style="color:orange" href="/anime_characters/{{ $character->id }}">{{ $character->name }}</a> </td>
                    <td>{{ $character->anime}}</td>
                    <td>{{ $character->creator}}</td>

                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

@stop

@section('sidebar')

<h2>Other characters</h2>

    <ul>
        @foreach($characters as $cat)
            <li><a href="#">{{ $cat->name }}</a></li>
        @endforeach
    </ul>


@stop
