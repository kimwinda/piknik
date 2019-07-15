@extends('layouts')
@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">About
    <small>PiknikYUK</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">About</li>
  </ol>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="{{url('Agency/img/background.png')}}" alt="">
    </div>
    <div class="col-lg-6">
      <h2>VISI dan MISI</h2>
        VISI KOTA YOGYAKARTA
        <br><br>
        Meneguhkan Kota Yogyakarta sebagai Kota Nyaman Huni dan Pusat Pelayanan Jasa yang Berdaya Saing Kuat untuk Keberdayaan Masyarakat dengan Berpijak pada Nilai Keistimewaan
        <br><br>
        MISI KOTA YOGYAKARTA
        <br><br>
        Meningkatkan kesejahteraan dan keberdayaan masyarakat 
        Memperkuat ekonomi kerakyatan dan daya saing Kota Yogyakarta
        Memperkuat moral, etika dan budaya masyarakat Kota Yogyakarta
        Meningkatkan kualitas pendidikan, kesehatan, sosial dan budaya
        Memperkuat tata kota dan kelestarian lingkungan
        Membangun sarana prasarana publik dan permukiman
      Meningkatkan tatakelola pemerintah yang baik dan bersih</p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <h2>Our Team</h2>

  <div class="row">
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
        <div class="card-body">
          <h4 class="card-title">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-muted">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class="card-footer">
          <a href="#">name@example.com</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
        <div class="card-body">
          <h4 class="card-title">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-muted">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class="card-footer">
          <a href="#">name@example.com</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="http://placehold.it/750x450" alt="">
        <div class="card-body">
          <h4 class="card-title">Team Member</h4>
          <h6 class="card-subtitle mb-2 text-muted">Position</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
        </div>
        <div class="card-footer">
          <a href="#">name@example.com</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Our Customers -->
  <h2>Our Customers</h2>
  <div class="row">
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata1.jpg')}}" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata4.jpg')}}" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata5.jpg')}}" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata6.jpg')}}" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata9.jpg')}}" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="{{url('Agency/img/wisata/wisata10.jpg')}}" alt="">
    </div>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

@stop