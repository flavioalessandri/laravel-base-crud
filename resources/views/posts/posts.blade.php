@extends('layouts.main-layout')

@section('content')

<section id="post">

  {{-- <h2>Posts</h2> --}}


  @foreach ($recensioni as $recensione)

  <div class="post">
    <div class="post-container">
      <h3>ID: {{$recensione->id}}</h3>

      <h3>Titolo</h3>
      <span>{{$recensione->title}}</span>

      <h3>Testo</h3>
      <div class="txt">
        <p>{{$recensione->text}}</p>
      </div>

      <h3>Categoria</h3>
      <div class="categoria">
        <p>{{$recensione->category}}</p>
      </div>

      <h3>Like <i class="far fa-thumbs-up"></i></h3>
      <p>{{$recensione->like}}</p>

      <h3>DisLike <i class="far fa-thumbs-down"></i></h3>
      <p>{{$recensione->dislike}}</p>
      </div>

  </div>
  @endforeach

</section>
@endsection
