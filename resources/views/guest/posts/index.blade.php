@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h1>Elenco Post:</h1>


      <div class="col-12">
        <ul>
          @foreach ($posts as $post)
            <li>
              <a href="{{route('guest.posts.show',$post)}}">{{$post->title}}</a>
            </li>
          @endforeach
        </ul>
      </div>

    </div>

  </div>
@endsection
