@extends('layouts')
@section('content')
<div class="container">

    <div class="row">

      <div class="col-lg-12">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{url('Agency/img/gallery/img1.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="{{url('Agency/img/gallery/img2.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="{{url('Agency/img/gallery/img4.jpg')}}"alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
@foreach($data as $key=>$value)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-60">
              <img class="card-img-top" src="{{url('uploads/'.$value->foto)}}" alt="">
              <div class="card-body">
                <h4 class="card-title" style="text-align: center;">
                  <a>{{$value->judul}}</a>
                </h4>
              </div>
            </div>
          </div>
@endforeach
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
@stop