@extends('layouts.main-layout')

@section('content')

<section id="post">

  {{-- <h2>Posts</h2> --}}


  @foreach ($recensioni as $recensione)

  <div class="post">

      <h3>ID: {{$recensione->id}}</h3>


      <h3>Titolo</h3>
      <span>{{$recensione->title}}</span>

      <h3>Testo</h3>
      <p>{{$recensione->text}}</p>

      <h3>Categoria</h3>
      <p>{{$recensione->category}}</p>

      <h3>Like <i class="far fa-thumbs-up"></i></h3>
      <p>{{$recensione->like}}</p>

      <h3>DisLike <i class="far fa-thumbs-down"></i></h3>
      <p>{{$recensione->dislike}}</p>

    </div>
    @endforeach




{{-- <table>
  <caption>Reviews</caption>
  <tr>
    <th>Titolo</th>
    <th>Testo</th>
    <th>Categoria</th>
    <th>Like <i class="far fa-thumbs-up"></i></th>
    <th>DisLike <i class="far fa-thumbs-down"></i></th>
  </tr>

  @foreach ($recensioni as $recensione)

    <tr>
      <td>{{$recensione->title}}</td>
      <td>{{$recensione->text}}</td>
      <td>{{$recensione->category}}</td>
      <td>{{$recensione->like}}</td>
      <td>{{$recensione->dislike}}</td>
    </tr> --}}

{{--
  @endforeach




</table> --}}


</section>
@endsection
