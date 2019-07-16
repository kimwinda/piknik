@extends('layouts')
@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">Informasi
    <small>Event</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Event</li>
  </ol>

  <!-- Project One -->
  <div class="row">
    @foreach($data as $key=>$value)
    <div class="col-md-7"><br>
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('uploads/'.$value->foto)}}" alt="">
      </a>
    </div>
    <div class="col-md-5"><br>
      <h3>{{$value->judul}}</h3>
      <p>{{$value->deskripsi}}</p>
    </div>
    @endforeach
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@stop