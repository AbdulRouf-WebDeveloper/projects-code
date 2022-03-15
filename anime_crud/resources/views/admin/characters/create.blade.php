@extends('layouts/app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{$title}}</h1>
<p><a href="/admin/characters" class="btn btn-warning">Back</a></p>
            <div class="card">
                <div class="card-body">
                    <form class="form" method="post" action="/admin/characters" enctype="multipart/form-data">
                    @csrf

                       <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"
                            value="{{old('name')}}"/>
                            @error('name')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="anime">Anime</label>
                            <input type="text" class="form-control" name="anime"
                            value="{{old('anime')}}"/>
                            @error('anime')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="genre">Genre</label>
                            <input type="text" class="form-control" name="genre"
                            value="{{old('genre')}}"/>
                            @error('genre')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="creator">Creator</label>
                            <input type="text" class="form-control" name="creator"
                            value="{{old('creator')}}"/>
                            @error('creator')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea type="text" class="form-control" id="comment" rows="4" name="body"
                            value="{{old('body')}}"></textarea>
                            @error('body')
                               <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" value="{{ old('image') }}"
                                                          />
                            @error('image')
                               <p class="text-danger">{{$message}}</p>
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
