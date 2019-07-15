@extends('back.layouts')
@section('back.content')
<section class="content" style="padding-right: 100px; padding-left: 30px; padding-top: 30px;">
<div class="row">
<div class="col-md-12">
        <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit Event</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('event-update')}}" method="post">
                  {{csrf_field()}}
               <input type="hidden" name="id" value="{{$data->id_event}}">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input type="text" name="judul" class="form-control" id="judul" placeholder="Enter Judul" value="{{$data->judul}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Enter Deskripsi" value="{{$data->deskripsi}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Foto</label>
                      <input type="file" name="foto" class="form-control" id="foto" placeholder="Enter Deskripsi" value="{{$data->foto}}">
                    </div>
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
          </div>
      </div>
  </section>
@stop