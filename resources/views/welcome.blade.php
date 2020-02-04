@extends('plantilla')
@section('seccion')
    <div class="container my-4">
      <h1 class="display-4"> Notas </h1>
      @if (session('mensaje'))
      <div class="alert alert-success">
        {{ session('mensaje') }}
      </div>
      @endif
      <form action="{{ route('notas.crear') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
         <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2">
         <button class="btn btn-primary btn-block" type="submit">Agregar</button>
      </form>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>
        <a href="{{route('notas.detalle',$item)}}">
          {{$item->nombre}}
        </a>
        </td>
      <td>{{$item->descripcion}}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@endsection
