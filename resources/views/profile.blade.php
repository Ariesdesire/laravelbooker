@extends('layouts.header')

@section('content')
<div class="container">
<h1>{{$user->name}}'s Profile</h1>
<p>See what {{$user->name}} has been up to

</p>

<hr/>
<div class="row">
  <div class="col-md-6">
    <h3>Routes </h3>
    @foreach ($user->routes as $route)
    <div class="card">
      <div class="card-header">
        {{$route->title}}
      </div>
      <div class="card-body">
        {{$route->description}}
      </div>
      <div class="card-footer">
        <a href="{{route('routes.show', $route->id)}}" class="btn btn-link">View Route</a>


      </div>

    </div>
    @endforeach

  </div>
  <div class="col-md-6">
    <h3>Attractions</h3>



  </div>

</div>
</div>
@endsection
