@extends('layouts.main-layout')

@section('content')

  <section id="pagamenti">

    <h2>PAGAMENTI</h2>

    <table>
      <tr>
        <th>STATUS</th>
        <th>PREZZO</th>
        <th>CANCELLA</th>
        <th>AGGIORNA</th>
      </tr>

      @foreach ($pagamenti as $pagamento)

      <tr>
        <td>{{$pagamento->status}}</td>
        <td>{{$pagamento->price}}</td>
        <td><a href="{{route('pagamenti.delete', $pagamento->id)}}"><i class="fas fa-trash-alt"></i></a></td>
        <td><a href="{{route('pagamenti.edit', $pagamento->id)}}"><i class="fas fa-pencil-alt"></i></a></td>
      </tr>

    @endforeach
    </table>

  </section>
@endsection
