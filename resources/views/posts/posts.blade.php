@extends('layouts.main-layout')

@section('content')

<section id="recensioni">

<table>
  <caption>Reviews</caption>
  <tr>
    <th>Titolo</th>
    <th>Testo</th>
    <th>Categoria</th>
    <th>Like</th>
    <th>DisLike</th>
  </tr>

  @foreach ($recensioni as $recensione)

    <tr>
      <td>{{$recensione->title}}</td>
      <td>{{$recensione->text}}</td>
      <td>{{$recensione->category}}</td>
      <td>{{$recensione->like}}</td>
      <td>{{$recensione->dislike}}</td>
    </tr>


  @endforeach




</table>


</section>
@endsection
