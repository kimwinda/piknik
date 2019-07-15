@extends('back.layouts')
@section('back.content')
<section class="content">
<div class="row">
<div class="col-md-12">
				<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Tambah Event</h3>
                </div><!-- /.box-header -->
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <!-- form start -->
                <form role="form" action="{{route('event-store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" placeholder="Enter Judul" required="">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <textarea type="text" name="deskripsi" class="form-control" name="deskripsi" id="deskripsi" placeholder="Isikan Deskripsi"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="entrycategory">Foto</label>
                      <input type="file" name="foto" class="form-control" id="foto" placeholder="Choose Foto" required="">
                    </div>
                  </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
      </div>
  </section>
@stop