@extends('layouts.main-layout')

@section('content')

  <section>


    <h2>{{$txt}}</h2>

    <ul>


    @foreach ($paganti as $pagante)

      <li>
        <span>
          {{ $pagante -> id }}
          <strong>) Nome: </strong> {{ $pagante -> name }}
          <strong> | Cognome: </strong>  {{ $pagante -> lastname }}
          <strong> | Indirizzo :</strong> {{ $pagante -> address }}
        </span>
      </li>


    @endforeach

  </ul>
  </section>
@endsection
