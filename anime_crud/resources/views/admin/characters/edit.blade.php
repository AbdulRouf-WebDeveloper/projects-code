@extends('layouts/app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$title}}</h1>
<p><a href="/admin/characters" class="btn btn-warning">Back</a></p>
            <div class="card">
                <div class="card-body">
                    <form class="form" method="post" action="/admin/characters/edit/{{ $char->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                       <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                            value="{{old('name',$char->name)}}"/>
                            @error('name')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="anime">Anime</label>
                            <input type="text" class="form-control" name="anime"
                            value="{{old('anime',$char->anime)}}"/>
                            @error('anime')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" name="genre"
                            value="{{old('genre', $char->genre)}}"/>
                            @error('genre')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="creator">Creator</label>
                            <input type="text" class="form-control" name="creator"
                            value="{{old('creator',$char->creator)}}"/>
                            @error('creator')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea type="text" class="form-control" id="comment" rows="4" name="body"
                            autofocus>{{old('body',$char->body)}}"</textarea>
                            @error('body')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <img style="width: 150px; height: auto; display: block;" src="/images/{{ $char->image }}" />
                            <label for="image">Image</label>
                            <input type="file" name="image"/>
                            @error('image')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                       </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Submit</button>
                        </div>

                 </div>
               </div>
            </form>
      </div>
  </div>
</div>

@stop
