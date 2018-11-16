@extends('layouts.app')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

@section('content')
<div class="container contact-form">

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form action="{{route('routes.store')}}" method="POST">
              {{csrf_field()}}

                <h3>Create A Route</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Tour name" value="" />
                        </div>


                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Create Route" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="description" class="form-control" placeholder="description of tour" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
@endsection
