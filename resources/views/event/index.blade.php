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
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('Agency/img/event/event1.jpg')}}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Nonton Yuuk Festival Lampion di Parangtritis</h3>
      <p>Langit pantai Parangtritis malam ini akan lebih tampil eksotik, pasalnya setidaknya 1000 Lampion yang akan Diterbangkan di Bantul dalam gelaran event Lenterne Festival De Paris .Lampion tersebut akan diterbangkan pada hari Sabtu, 15 September 2018 di Pantai Parangtritis Bantul mulai pukul 18.00 WIB.</p>
      <a class="btn btn-primary" href="#">View Project
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Two -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('Agency/img/event/event2.jpg')}}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Perayaan Natal Bersama Keluarga Besar ASN-TNI-POLRI-DPRD-BUMN/BUMD-Perbankan Se-Kabupaten Bantul</h3>
      <p>Perayaan Natal bersama keluarga besar ASN-TNI-POLRI-DPRD-BUMN/BUMD-Perbankan se-Kabupaten Bantul berlangsung di Pendopo Parasamya, Sabtu (5/1).Dalam sambutanya Bupati Bantul yang diwakili Sekretaris Daerah Kabupaten Bantul, Drs. Helmi Jamharis, M.M, menyampaikan rasa bahagia dan senang, kedatipun </p>
      <a class="btn btn-primary" href="#">View Project
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Three -->
  <div class="row">
    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('Agency/img/event/event3.jpg')}}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Gowes Bareng Kapolda DIY</h3>
      <p>Ini nihh hadiah utama gowes bersama Kapolda DIY besok Minggu, 30 Juni 2019. Yuk ramaikan even ini, banyak hadiah nya loooo..!

        Gowes Bareng Kapolda DIY

      Sambut Hari Bhayangkara ke73, Polda DIY menggelar Gowes bareng  Kapolda DIY Irjen Pol Drs Ahmad Dofiri, http://M.Si </p>
      <a class="btn btn-primary" href="#">View Project
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Project Four -->
  <div class="row">

    <div class="col-md-7">
      <a href="#">
        <img class="img-fluid rounded mb-3 mb-md-0" src="{{url('Agency/img/event/event4.jpg')}}" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>COMICONNECT 2019</h3>
      <p>Jangan lewatkan kesempatan untuk saling belajar dan berkolaborasi antara seni dan bisnis bersama ciayo comics di COMICONNECT 2019 pada tanggal 30 Juni 2019 di SiNERGI, Yogyakarta.

        Catat tanggalnya, jangan sampai ketinggalan!
      Untuk pendaftaran, silakan ke http://comiconnect.ciayo.com </p>
      <a class="btn btn-primary" href="#">View Project
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">«</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">»</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>

</div>
<!-- /.container -->
@stop