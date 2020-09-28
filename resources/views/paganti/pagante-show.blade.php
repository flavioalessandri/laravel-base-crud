@extends('layouts.main-layout')


@section('content')

  <section id="pagante-show">


  <table>
    <tr>
      <th>NOME</th>
      <th>COGNOME</th>
      <th>INDIRIZZO</th>
    </tr>

    <tr>
      <td>{{$pagante->name}}</td>
      <td>{{$pagante->lastname}}</td>
      <td>{{$pagante->address}}</td>
    </tr>

  </table>

</section>
@endsection
