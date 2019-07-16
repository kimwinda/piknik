@extends('layouts')
@section('content')

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background-color: #232b2b; color: white;">
      <h1 class="display-3" style="color: #fed136;">Yuk Dolan Ndeso!</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
@foreach($data as $key=>$value)
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img src="{{url('uploads/'.$value->foto)}}" alt="Image" class="card-img-top">
          <div class="card-body">
            <h4 class="card-title" value="">{{$value->judul}}</h4>
            <p class="card-text">{{$value->deskripsi}}</p>
          </div>
        </div>
      </div>
@endforeach
    </div>
    <!-- /.row -->

  </div>

  @stop