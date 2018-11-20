@extends('layouts.header')
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">

@section('content')
<div class="container">

  <section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">{{$route->title}} </h1>
    <p class="lead text-muted">{{$route->description}}</p>
    <p>
      <a href="#" class="btn btn-primary my-2">Main call to action</a>
      <a href="#" class="btn btn-secondary my-2">Book Now</a>
    </p>
  </div>
</section>



<div class="album py-3 bg-light">
  <div class="container">
<div class="row">
@foreach($route->attractions as $attraction)

<div class="col-md-4">
  <div class="card mb-4 box-shadow">
    <img class="card-img-tops" src="http://placekitten.com/100/250" alt="Card image cap">
    <div class="card-header">  {{$attraction->title}}

    </div>
    <div class="card-body">
      <p class="card-text">{{$attraction->description}}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
        </div>
        <small class="text-muted">9 mins</small>
      </div>
    </div>
  </div>
</div>

@endforeach
</div>
</div>
</div>


<hr/>


<form action="{{route('attractions.store')}}" method="POST">
  {{csrf_field()}}

  <h4>Add Attraction: </h4>
  <input type="hidden" value="{{$route->id}}" name="route_id"/>

  <div class="row">
       <div class="col-md-6">
           <div class="form-group">
               <input type="text" name="title" class="form-control" placeholder="Attraction name" value="" />
           </div>


           <div class="form-group">
               <input type="submit" name="btnSubmit" class="btnContact" value="Create Attraction" />
           </div>
       </div>
       <div class="col-md-6">
           <div class="form-group">
               <textarea name="description" class="form-control" placeholder="description of attraction" style="width: 100%; height: 150px;"></textarea>
           </div>
       </div>
   </div>
 </form>

</div>
@endsection

</div>
