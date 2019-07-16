@extends('layouts')
@section('content')

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background-color: #232b2b; color: white;">
      <h1 class="display-3" style="color: #fed136;">Yuk Kulineran!</h1>
      <p class="lead">Berikut ini adalah beberapa referensi kuliner yang enak dan enak banget yang lagi hitz di Jogja nih gaes. Bukan cuma enak aja, tapi harganya juga bersahabat, apalagi untuk kantong mahasiswa.</p>
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