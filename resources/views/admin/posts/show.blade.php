@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-9">
        <h1>{{$post->title}}</h1>

        <p>{{$post->content}}</p>

        <img src="{{$post->image_path}}" alt="">
      </div>

      <div class="col-3">
        <h3>Autore: {{($post->user->name)}}</h3>
        <p>Email: {{($post->user->email)}}</p>
      </div>

    </div>

  </div>
@endsection
