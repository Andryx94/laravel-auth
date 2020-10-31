@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h1>Ciao {{$user->name}}, ecco l'elenco dei nostri Post:</h1>


      <div class="col-12">
        <ul>
          @foreach ($posts as $post)
            <li>
              <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a>
            </li>
          @endforeach
        </ul>
      </div>

    </div>

  </div>
@endsection
