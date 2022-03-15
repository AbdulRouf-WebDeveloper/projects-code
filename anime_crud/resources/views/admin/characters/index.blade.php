@extends('layouts/app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$title}}</h1>

     <p><a href="/admin/characters/create" class="btn btn-success">Add New</a></p>
     <!-- Search widget-->
     <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                         <form action="/admin/characters/search" method="post">
                         @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" name="search"/>
                                <input  class="btn btn-success" type ="submit" value="Search"/>
                            </div>
                         </form>
                        </div>
                    </div>
     <table class="table table-striped table-dark">
         <thead>
             <tr class="bg-success">
                 <th>ID</th>
                 <th>Name</th>
                 <th>Anime</th>
                 <th>Creator</th>
                 <th>Actions</th>
             </tr>
         </thead>
         <tbody>
             @if($characters->isNotEmpty())
             @foreach($characters as $char)
             <tr>
                 <td>{{$char->id}}</td>
                 <td>{{$char->name}}</td>
                 <td>{{$char->anime}}</td>
                 <td>{{$char->creator}}</td>
                 <td><a class="btn btn-primary btn-sm" href="/admin/characters/edit/{{ $char->id}}">Edit</a>
                &nbsp;<form style="display:inline" onsubmit = "return confirm('Do you really want to delete this Character');" action="/admin/characters/{{ $char->id }}" method="post">
                       @csrf
                       @method('DELETE')
                          <button class="btn btn-danger btn-sm">Delete</button>
                      </form></td>
             </tr>
             @endforeach
             @else
             <div class="text-danger">
                 No Characters Found
             </div>
             @endif
         </tbody>
     </table>

        </div>
  </div>
</div>

@stop
