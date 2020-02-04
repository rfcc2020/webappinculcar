@extends('plantilla')
@section('seccion')
<h1>Este es mi equipo de trabajo</h1>
@foreach($equipo as $item)
	<a href="{{route('nosotros',$item)}}" class="h4 text-danger">{{$item}}</a><br>
@endforeach
@if(!empty($nombre))
	@switch($nombre)
		@case($nombre=='robin')
			<h2>El nombre es {{$nombre}}</h2>
		@break
		@case($nombre=='ronny')
			<h2>El nombre es {{$nombre}}</h2>
		@break
		@case($nombre=='caro')
			<h2>El nombre es {{$nombre}}</h2>
		@break
		@case($nombre=='dome')
			<h2>El nombre es {{$nombre}}</h2>
		@break
	@endswitch
@endif
@endsection