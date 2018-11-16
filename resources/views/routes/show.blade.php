@extends('layouts.header')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="container">

  <div class="card mb-2">
  <div class="card-header">
{{$route->title}}  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$route->description}}</p>

    </blockquote>
  </div>
</div>


<div class="row align-items-center">
@foreach($route->attractions as $attraction)


  <div class="col-sm-4">
    <div class="card mb-2">
    <div class="card-header">
  {{$attraction->title}}  </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{$attraction->description}}</p>

      </blockquote>
    </div>
  </div>


  </div>


@endforeach
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
