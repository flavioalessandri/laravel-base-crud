@extends('layouts.main-layout')

@section('content')

  <section id="pagamento-form">

    <h2>FORM</h2>

    <form class="" action="{{route('pagamenti.update', $pagamento->id)}}" method="post">
      @csrf
      @method('POST')

      <div class="form">
        <label for="status">Status Pagamento</label>
        <input type="text" name="status" value="{{$pagamento->status}}">
      </div>

      <div class="form">
        <label for="price">Prezzo Pagamento</label>
        <input type="number" name="price" value="{{$pagamento->price}}">
      </div>

      <button type="submit" name="button">AGGIORNA</button>
    </form>

</section>
@endsection
