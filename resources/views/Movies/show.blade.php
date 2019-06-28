@extends("template")

@section("titulo", "Detalle de la película")

@section("contenido")
  <h2>Detalle de:{{$movie->title}} </h2>
<p>{{$movie->rating}}</p>
<p>{{$movie->length}}</p>
<p>{{$movie->awards}}</p>
@endsection
