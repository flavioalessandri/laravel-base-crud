@extends('layouts.main-layout')

@section('content')

  <section id="pagante-table">
    <table>
       <caption>{{$txt}}</caption>
       <tr>
         <th>Nome</th>
         <th>Cognome</th>
         <th>Dettagli</th>
       </tr>
       <tr>
         @foreach ($paganti as $pagante)
         <td>
           <a href="{{route('paganti.show', $pagante -> id)}}">
             {{ $pagante -> name }}
            </a>
         </td>
         <td>
           <a href="{{route('paganti.show', $pagante -> id)}}">
           {{ $pagante -> lastname }}
           </a>
         </td>
         <td>
           <a href="{{route('paganti.show', $pagante -> id)}}">
             <i class="fas fa-info-circle"></i>
           </a>
         </td>
       </tr>
        @endforeach
    </table>

  </section>
@endsection
