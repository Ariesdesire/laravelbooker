@extends('layouts.header')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="container">
  <div class="row d-flex justify-content-between">

  <h1>Routes</h1>
  <br>
<div class="justify-content-end"> <a href="{{route('routes.create')}}" class="badge badge-primary"> <i class="fas fa-3x fa-plus-circle"></i></a>
</div>

</div>

  <hr/>

@foreach($routes as $route)


  <div class="card mb-2">
  <div class="card-header">
{{$route->title}}  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$route->description}}</p>
      <footer>  <a href="{{ route('routes.show', $route->id)}}" class="btn btn-primary">View Details</a></footer>
    </blockquote>
  </div>
</div>
  @endforeach

  {{$routes->links()}}

</div>



</div>
@endsection
